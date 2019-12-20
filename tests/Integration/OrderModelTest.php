<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Order;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\OrderFile;
use HappyCog\OsborneApi\ErpService\Model\OrderLine;
use HappyCog\OsborneApi\ErpService\Model\OrderNote;
use HappyCog\OsborneApi\ErpService\Model\OrderPackage;
use HappyCog\OsborneApi\ErpService\Model\OrderPayment;
use HappyCog\OsborneApi\ErpService\Model\AppliedOrderService;
use HappyCog\OsborneApi\ErpService\Model\AppliedProductService;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.TooManyMethods)
 */
class OrderModelTest extends TestCase
{
    use IntegrationServiceApi;

    /** @test */
    public function serviceApiFindsAllOrders()
    {
        $orders = Order::all();

        $this->assertInstanceOf(Collection::class, $orders);

        foreach ($orders as $order) {
            $this->assertInstanceOf(Order::class, $order);
        }
    }

    /**
     * @test
     */
    public function serviceApiCreatesOrders()
    {
        $order = Order::create([
            'customerId' => 23,
            'email' => 'johndoe@example.com',
            'status' => 'Created',
        ]);

        $this->assertInstanceOf(Order::class, $order);

        return $order->id;
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     */
    public function serviceApiFindsASpecificOrder($orderId)
    {
        $foundOrder = Order::find($orderId);

        $this->assertInstanceOf(Order::class, $foundOrder);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     */
    public function serviceApiUpdatesOrders($orderId)
    {
        $updated = Order::find($orderId)->update([
            'customerId' => 34,
            'email' => 'janedoe@example.com',
            'status' => 'Updated',
        ]);

        $this->assertInstanceOf(Order::class, $updated);

        $this->assertEquals('janedoe@example.com', $updated->email);
    }

    /**
     * @test
     */
    public function serviceApiVoidsAnOrder()
    {
        $orderId = $this->serviceApiCreatesOrders();

        $response = Order::find($orderId)->delete();

        $this->assertIsArray($response);
        $this->assertEquals([
            'success' => true,
        ], $response);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderLines
     */
    public function serviceApiFindsAllOrderLines($orderId)
    {
        $lines = Order::find($orderId)->lines;

        $this->assertInstanceOf(Collection::class, $lines);

        foreach ($lines as $line) {
            $this->assertInstanceOf(OrderLine::class, $line);
        }
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     */
    public function serviceApiCreatesOrderLines($orderId)
    {
        $line = Order::find($orderId)->lines->create([
            'productId' => 23,
            'productMaterialId' => 34,
            'quantity' => 7,
            'originalPrice' => 4.56,
            'unitPrice' => 5.67,
            'totalPrice' => 39.69,
        ]);

        $this->assertInstanceOf(OrderLine::class, $line);

        return $line->id;
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderLines
     */
    public function serviceApiFindsASpecificOrderLine($orderId, $lineId)
    {
        $line = Order::find($orderId)->lines($lineId);

        $this->assertInstanceOf(OrderLine::class, $line);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderLines
     */
    public function serviceApiUpdatesOrderLines($orderId, $lineId)
    {
        $line = Order::find($orderId)->lines($lineId)->update([
            'productId' => 23,
            'productMaterialId' => 34,
            'quantity' => 7,
            'originalPrice' => 4.56,
            'unitPrice' => 5.67,
            'totalPrice' => 39.69,
        ]);

        $this->assertInstanceOf(OrderLine::class, $line);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     */
    public function serviceApiDeletesAnOrderLine($orderId)
    {
        $lineId = $this->serviceApiCreatesOrderLines($orderId);

        $response = Order::find($orderId)->lines($lineId)->delete();

        $this->assertIsArray($response);
        $this->assertEquals([
            'success' => true,
        ], $response);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     */
    public function serviceApiCreatesAnOrderFile($orderId)
    {
        $file = Order::find($orderId)->files->create([
            'productId' => 34,
            'filename' => 'example321.jpg',
            'contents' => base64_encode('This is some file data in base64'),
        ]);

        $this->assertInstanceOf(OrderFile::class, $file);

        $this->assertEquals('This is some file data in base64', base64_decode($file->contents));
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderLines
     * @depends serviceApiCreatesOrderLineServices
     */
    public function serviceApiFindsAllOrderLineServices($orderId, $lineId)
    {
        $services = Order::find($orderId)->lines($lineId)->services;

        $this->assertInstanceOf(Collection::class, $services);

        foreach ($services as $service) {
            $this->assertInstanceOf(AppliedProductService::class, $service);
        }
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderLines
     */
    public function serviceApiCreatesOrderLineServices($orderId, $lineId)
    {
        $service = Order::find($orderId)->lines($lineId)->services->create([
            'orderLineId' => 2,
            'productServiceId' => 34,
            'note' => 'Cut (v1) off of (v2) of product',
            'price' => 3.45,
        ]);

        $this->assertInstanceOf(AppliedProductService::class, $service);

        return $service->id;
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderLines
     * @depends serviceApiCreatesOrderLineServices
     */
    public function serviceApiFindsASpecificOrderLineService($orderId, $lineId, $serviceId)
    {
        $service = Order::find($orderId)->lines($lineId)->services($serviceId);

        $this->assertInstanceOf(AppliedProductService::class, $service);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderLines
     * @depends serviceApiCreatesOrderLineServices
     */
    public function serviceApiUpdatesOrderLineService($orderId, $lineId, $serviceId)
    {
        $service = Order::find($orderId)->lines($lineId)->services($serviceId)->update([
            'orderLineId' => 34,
            'productServiceId' => 45,
            'note' => 'Cut (v2) off of (v3) of product',
            'price' => 4.56,
        ]);

        $this->assertInstanceOf(AppliedProductService::class, $service);

        $this->assertEquals(4.56, $service->price);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderLines
     */
    public function serviceApiDeletesAnOrderLineService($orderId, $lineId)
    {
        $serviceId = $this->serviceApiCreatesOrderLineServices($orderId, $lineId);

        $response = Order::find($orderId)->lines($lineId)->services($serviceId)->delete();

        $this->assertIsArray($response);
        $this->assertEquals([
            'success' => true,
        ], $response);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderNotes
     */
    public function serviceApiFindsAllOrderNotes($orderId)
    {
        $notes = Order::find($orderId)->notes;

        $this->assertInstanceOf(Collection::class, $notes);

        foreach ($notes as $note) {
            $this->assertInstanceOf(OrderNote::class, $note);
        }
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     */
    public function serviceApiCreatesOrderNotes($orderId)
    {
        $note = Order::find($orderId)->notes->create([
            'orderId' => 23,
            'text' => 'This is a note',
        ]);

        $this->assertInstanceOf(OrderNote::class, $note);

        return $note->id;
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderNotes
     */
    public function serviceApiFindsASpecificOrderNote($orderId, $noteId)
    {
        $note = Order::find($orderId)->notes($noteId);

        $this->assertInstanceOf(OrderNote::class, $note);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderNotes
     */
    public function serviceApiUpdatesOrderNotes($orderId, $noteId)
    {
        $note = Order::find($orderId)->notes($noteId)->update([
            'orderId' => 34,
            'text' => 'This is a different note',
        ]);

        $this->assertInstanceOf(OrderNote::class, $note);

        $this->assertEquals('This is a different note', $note->text);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     */
    public function serviceApiDeletesAnOrderNote($orderId)
    {
        $noteId = $this->serviceApiCreatesOrderNotes($orderId);

        $response = Order::find($orderId)->notes($noteId)->delete();

        $this->assertIsArray($response);
        $this->assertEquals([
            'success' => true,
        ], $response);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     */
    public function serviceApiFindsAllOrderPackages($orderId)
    {
        $packages = Order::find($orderId)->packages;

        $this->assertInstanceOf(Collection::class, $packages);

        foreach ($packages as $package) {
            $this->assertInstanceOf(OrderPackage::class, $package);
        }

        return $packages->first()->id;
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiFindsAllOrderPackages
     */
    public function serviceApiFindsASpecificOrderPackage($orderId, $packageId)
    {
        $package = Order::find($orderId)->packages($packageId);

        $this->assertInstanceOf(OrderPackage::class, $package);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderPayments
     */
    public function serviceApiFindsAllOrderPayments($orderId)
    {
        $payments = Order::find($orderId)->payments;

        $this->assertInstanceOf(Collection::class, $payments);

        foreach ($payments as $payment) {
            $this->assertInstanceOf(OrderPayment::class, $payment);
        }
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     */
    public function serviceApiCreatesOrderPayments($orderId)
    {
        $payment = Order::find($orderId)->payments->create([
            'amount' => 1.23,
            'paymentTerm' => 'Cash',
        ]);

        $this->assertInstanceOf(OrderPayment::class, $payment);

        return $payment->id;
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderPayments
     */
    public function serviceApiFindsASpecificOrderPayment($orderId, $paymentId)
    {
        $payment = Order::find($orderId)->payments($paymentId);

        $this->assertInstanceOf(OrderPayment::class, $payment);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderServices
     */
    public function serviceApiFindsAllOrderServices($orderId)
    {
        $services = Order::find($orderId)->services;

        $this->assertInstanceOf(Collection::class, $services);

        foreach ($services as $service) {
            $this->assertInstanceOf(AppliedOrderService::class, $service);
        }
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     */
    public function serviceApiCreatesOrderServices($orderId)
    {
        $service = Order::find($orderId)->services->create([
            'orderId' => 23,
            'orderServiceId' => 34,
            'note' => 'Rush to Ship',
            'price' => 3.45,
        ]);

        $this->assertInstanceOf(AppliedOrderService::class, $service);

        return $service->id;
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderServices
     */
    public function serviceApiFindsASpecificOrderService($orderId, $serviceId)
    {
        $service = Order::find($orderId)->services($serviceId);

        $this->assertInstanceOf(AppliedOrderService::class, $service);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     * @depends serviceApiCreatesOrderServices
     */
    public function serviceApiUpdatesOrderServices($orderId, $serviceId)
    {
        $service = Order::find($orderId)->services($serviceId)->update([
            'orderId' => 34,
            'orderServiceId' => 45,
            'note' => 'No Packing Peanuts',
            'price' => 4.56,
        ]);

        $this->assertInstanceOf(AppliedOrderService::class, $service);

        $this->assertEquals('No Packing Peanuts', $service->note);
    }

    /**
     * @test
     * @depends serviceApiCreatesOrders
     */
    public function serviceApiDeletesAnOrderService($orderId)
    {
        $serviceId = $this->serviceApiCreatesOrderServices($orderId);

        $response = Order::find($orderId)->services($serviceId)->delete();

        $this->assertIsArray($response);
        $this->assertEquals([
            'success' => true,
        ], $response);
    }
}

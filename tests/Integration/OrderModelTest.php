<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
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
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiFindsAllOrders()
    {
        $orders = Order::all();

        $this->assertInstanceOf(Collection::class, $orders);

        foreach ($orders as $order) {
            $this->assertInstanceOf(Order::class, $order);
        }
    }

    /** @test */
    public function serviceApiCreatesOrders()
    {
        $order = Order::create([
            'id' => 123, // this fixes a bug with prism
            'firstName' => 'John',
            'lastName' => 'Doe',
            'email' => 'jdoe@example.com',
            'emailOptIn' => true,
            'billingAddressId' => 12,
            'shippingCarrierId' => 23,
            'buyingGroupId' => 34,
            'freightTermsId' => 45,
        ]);

        $this->assertInstanceOf(Order::class, $order);
    }

    /** @test */
    public function serviceApiFindsASpecificOrder()
    {
        $order = Order::find(123);

        $this->assertInstanceOf(Order::class, $order);
    }

    /** @test */
    public function serviceApiUpdatesOrders()
    {
        $order = Order::find(123)->update([
            'firstName' => 'John',
            'lastName' => 'Doe',
            'email' => 'jdoe@example.com',
            'emailOptIn' => true,
            'billingAddressId' => 12,
            'shippingCarrierId' => 23,
            'buyingGroupId' => 34,
            'freightTermsId' => 45,
        ]);

        $this->assertInstanceOf(Order::class, $order);
    }

    /** @test */
    public function serviceApiVoidsAnOrder()
    {
        $response = Order::find(123)->delete();

        $this->assertIsArray($response);
        $this->assertEquals([
            'success' => true,
        ], $response);
    }

    /** @test */
    public function serviceApiFindsAllOrderLines()
    {
        $lines = Order::find(123)->lines;

        $this->assertInstanceOf(Collection::class, $lines);

        foreach ($lines as $line) {
            $this->assertInstanceOf(OrderLine::class, $line);
        }
    }

    /** @test */
    public function serviceApiCreatesOrderLines()
    {
        $line = Order::find(123)->lines->create([
            'productId' => 23,
            'productMaterialId' => 34,
            'quantity' => 7,
            'originalPrice' => 4.56,
            'unitPrice' => 5.67,
            'totalPrice' => 39.69,
        ]);

        $this->assertInstanceOf(OrderLine::class, $line);
    }

    /** @test */
    public function serviceApiFindsASpecificOrderLine()
    {
        $line = Order::find(123)->lines(234);

        $this->assertInstanceOf(OrderLine::class, $line);
    }

    /** @test */
    public function serviceApiUpdatesOrderLines()
    {
        $line = Order::find(123)->lines(234)->update([
            'productId' => 23,
            'productMaterialId' => 34,
            'quantity' => 7,
            'originalPrice' => 4.56,
            'unitPrice' => 5.67,
            'totalPrice' => 39.69,
        ]);

        $this->assertInstanceOf(OrderLine::class, $line);
    }

    /** @test */
    public function serviceApiDeletesAnOrderLine()
    {
        $response = Order::find(123)->lines(234)->delete();

        $this->assertIsArray($response);
        $this->assertEquals([
            'success' => true,
        ], $response);
    }

    /** @test */
    public function serviceApiCreatesAnOrderFile()
    {
        $file = Order::find(123)->files->create([
            'productId' => 123,
            'filename' => 'product123.jpg',
            'contents' => 'string'
        ]);

        $this->assertInstanceOf(OrderFile::class, $file);
    }

    /** @test */
    public function serviceApiFindsAllOrderLineServices()
    {
        $services = Order::find(123)->lines(234)->services;

        $this->assertInstanceOf(Collection::class, $services);

        foreach ($services as $service) {
            $this->assertInstanceOf(AppliedProductService::class, $service);
        }
    }

    /** @test */
    public function serviceApiCreatesOrderLineServices()
    {
        $service = Order::find(123)->lines(234)->services->create([
            'orderLineId' => 234,
            'productServiceId' => 34,
            'note' => 'Cut (v1) off of (v2) of product',
            'price' => 3.45,
        ]);

        $this->assertInstanceOf(AppliedProductService::class, $service);
    }

    /** @test */
    public function serviceApiFindsASpecificOrderLineService()
    {
        $service = Order::find(123)->lines(234)->services(345);

        $this->assertInstanceOf(AppliedProductService::class, $service);
    }

    /** @test */
    public function serviceApiUpdatesOrderLineService()
    {
        $service = Order::find(123)->lines(234)->services(345)->update([
            'orderLineId' => 23,
            'productServiceId' => 34,
            'note' => 'Cut (v1) off of (v2) of product',
            'price' => 3.45,
        ]);

        $this->assertInstanceOf(AppliedProductService::class, $service);
    }

    /** @test */
    public function serviceApiDeletesAnOrderLineService()
    {
        $response = Order::find(123)->lines(234)->services(345)->delete();

        $this->assertIsArray($response);
        $this->assertEquals([
            'success' => true,
        ], $response);
    }

    /** @test */
    public function serviceApiFindsAllOrderNotes()
    {
        $notes = Order::find(123)->notes;

        $this->assertInstanceOf(Collection::class, $notes);

        foreach ($notes as $note) {
            $this->assertInstanceOf(OrderNote::class, $note);
        }
    }

    /** @test */
    public function serviceApiCreatesOrderNotes()
    {
        $note = Order::find(123)->notes->create([
            'orderId' => 123,
            'text' => 'This is a note',
        ]);

        $this->assertInstanceOf(OrderNote::class, $note);
    }

    /** @test */
    public function serviceApiFindsASpecificOrderNote()
    {
        $note = Order::find(123)->notes(234);

        $this->assertInstanceOf(OrderNote::class, $note);
    }

    /** @test */
    public function serviceApiUpdatesOrderNotes()
    {
        $note = Order::find(123)->notes(234)->update([
            'orderId' => 123,
            'text' => 'This is a note',
        ]);

        $this->assertInstanceOf(OrderNote::class, $note);
    }

    /** @test */
    public function serviceApiDeletesAnOrderNote()
    {
        $response = Order::find(123)->notes(234)->delete();

        $this->assertIsArray($response);
        $this->assertEquals([
            'success' => true,
        ], $response);
    }

    /** @test */
    public function serviceApiFindsAllOrderPackages()
    {
        $packages = Order::find(123)->packages;

        $this->assertInstanceOf(Collection::class, $packages);

        foreach ($packages as $package) {
            $this->assertInstanceOf(OrderPackage::class, $package);
        }
    }

    /** @test */
    public function serviceApiFindsASpecificOrderPackage()
    {
        $package = Order::find(123)->packages(234);

        $this->assertInstanceOf(OrderPackage::class, $package);
    }

    /** @test */
    public function serviceApiFindsAllOrderPayments()
    {
        $payments = Order::find(123)->payments;

        $this->assertInstanceOf(Collection::class, $payments);

        foreach ($payments as $payment) {
            $this->assertInstanceOf(OrderPayment::class, $payment);
        }
    }

    /** @test */
    public function serviceApiCreatesOrderPayments()
    {
        $payment = Order::find(123)->payments->create([
            'amount' => 1.23,
            'paymentTerm' => 'Cash',
        ]);

        $this->assertInstanceOf(OrderPayment::class, $payment);
    }

    /** @test */
    public function serviceApiFindsASpecificOrderPayment()
    {
        $payment = Order::find(123)->payments(234);

        $this->assertInstanceOf(OrderPayment::class, $payment);
    }

    /** @test */
    public function serviceApiUpdatesOrderPayments()
    {
        $payment = Order::find(123)->payments(234)->update([
            'amount' => 1.23,
            'paymentTerm' => 'Cash',
        ]);

        $this->assertInstanceOf(OrderPayment::class, $payment);
    }

    /** @test */
    public function serviceApiDeletesAnOrderPayment()
    {
        $response = Order::find(123)->payments(234)->delete();

        $this->assertIsArray($response);
        $this->assertEquals([
            'success' => true,
        ], $response);
    }

    /** @test */
    public function serviceApiFindsAllOrderServices()
    {
        $services = Order::find(123)->services;

        $this->assertInstanceOf(Collection::class, $services);

        foreach ($services as $service) {
            $this->assertInstanceOf(AppliedOrderService::class, $service);
        }
    }

    /** @test */
    public function serviceApiCreatesOrderServices()
    {
        $service = Order::find(123)->services->create([
            'orderId' => 123,
            'orderServiceId' => 34,
            'note' => 'Rush to Ship',
            'price' => 3.45
        ]);

        $this->assertInstanceOf(AppliedOrderService::class, $service);
    }

    /** @test */
    public function serviceApiFindsASpecificOrderService()
    {
        $service = Order::find(123)->services(234);

        $this->assertInstanceOf(AppliedOrderService::class, $service);
    }

    /** @test */
    public function serviceApiUpdatesOrderServices()
    {
        $service = Order::find(123)->services(234)->update([
            'orderId' => 123,
            'orderServiceId' => 34,
            'note' => 'Rush to Ship',
            'price' => 3.45
        ]);

        $this->assertInstanceOf(AppliedOrderService::class, $service);
    }

    /** @test */
    public function serviceApiDeletesAnOrderService()
    {
        $response = Order::find(123)->services(234)->delete();

        $this->assertIsArray($response);
        $this->assertEquals([
            'success' => true,
        ], $response);
    }
}

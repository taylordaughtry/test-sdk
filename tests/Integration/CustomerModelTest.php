<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Address;
use HappyCog\OsborneApi\ErpService\Model\Customer;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\Promotion;
use HappyCog\OsborneApi\ErpService\Model\PaymentTerm;
use HappyCog\OsborneApi\ErpService\Model\CustomerNote;
use HappyCog\OsborneApi\ErpService\Model\OrderService;
use HappyCog\OsborneApi\ErpService\Model\CustomerProductPrice;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class CustomerModelTest extends TestCase
{
    use IntegrationServiceApi;

    /**
     * @test
     */
    public function serviceApiFindsAllCustomers()
    {
        $customers = Customer::all();

        $this->assertInstanceOf(Collection::class, $customers);

        foreach ($customers as $customer) {
            $this->assertInstanceOf(Customer::class, $customer);
        }
    }

    /**
     * @test
     */
    public function serviceApiCreatesCustomers()
    {
        $customer = Customer::create([
            'firstName' => 'John',
            'lastName' => 'Doe',
            'email' => 'johndoe@example.com',
        ]);

        $this->assertInstanceOf(Customer::class, $customer);

        return $customer->id;
    }

    /**
     * @test
     * @depends serviceApiCreatesCustomers
     */
    public function serviceApiFindsASpecificCustomer($customerId)
    {
        $customer = Customer::find($customerId);

        $this->assertInstanceOf(Customer::class, $customer);
    }

    /**
     * @test
     * @depends serviceApiCreatesCustomers
     */
    public function serviceApiUpdatesCustomers($customerId)
    {
        $customer = Customer::find($customerId)->update([
            'firstName' => 'Jane',
            'lastName' => 'Doe',
            'email' => 'janedoe@example.com',
        ]);

        $this->assertInstanceOf(Customer::class, $customer);

        $this->assertEquals('janedoe@example.com', $customer->email);
    }

    /**
     * @test
     * @depends serviceApiCreatesCustomers
     */
    public function serviceApiFindsCustomerBillingAddresses($customerId)
    {
        $addresses = Customer::find($customerId)->billingAddresses;

        $this->assertInstanceOf(Collection::class, $addresses);

        foreach ($addresses as $address) {
            $this->assertInstanceOf(Address::class, $address);
        }
    }

    /**
     * @test
     * @depends serviceApiCreatesCustomers
     */
    public function serviceApiFindsCustomerNotes($customerId)
    {
        $notes = Customer::find($customerId)->notes;

        $this->assertInstanceOf(Collection::class, $notes);

        foreach ($notes as $note) {
            $this->assertInstanceOf(CustomerNote::class, $note);
        }
    }

    /**
     * @test
     * @depends serviceApiCreatesCustomers
     */
    public function serviceApiFindsCustomerOrderServices($customerId)
    {
        $orderServices = Customer::find($customerId)->orderServices;

        $this->assertInstanceOf(Collection::class, $orderServices);

        foreach ($orderServices as $orderService) {
            $this->assertInstanceOf(OrderService::class, $orderService);
        }
    }

    /**
     * @test
     * @depends serviceApiCreatesCustomers
     */
    public function serviceApiFindsCustomerPaymentTerms($customerId)
    {
        $paymentTerms = Customer::find($customerId)->paymentTerms;

        $this->assertInstanceOf(Collection::class, $paymentTerms);

        foreach ($paymentTerms as $paymentTerm) {
            $this->assertInstanceOf(PaymentTerm::class, $paymentTerm);
        }
    }

    /**
     * @test
     * @depends serviceApiCreatesCustomers
     */
    public function serviceApiFindsCustomerProductPrices($customerId)
    {
        $productPrices = Customer::find($customerId)->productPrices;

        $this->assertInstanceOf(Collection::class, $productPrices);

        foreach ($productPrices as $productPrice) {
            $this->assertInstanceOf(CustomerProductPrice::class, $productPrice);
        }
    }

    /**
     * @test
     * @depends serviceApiCreatesCustomers
     */
    public function serviceApiFindsCustomerPromotions($customerId)
    {
        $promotions = Customer::find($customerId)->promotions;

        $this->assertInstanceOf(Collection::class, $promotions);

        foreach ($promotions as $promotion) {
            $this->assertInstanceOf(Promotion::class, $promotion);
        }
    }

    /**
     * @test
     * @depends serviceApiCreatesCustomers
     */
    public function serviceApiFindsCustomerShippingAddresses($customerId)
    {
        $addresses = Customer::find($customerId)->shippingAddresses;

        $this->assertInstanceOf(Collection::class, $addresses);

        foreach ($addresses as $address) {
            $this->assertInstanceOf(Address::class, $address);
        }
    }
}

<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
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
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiFindsAllCustomers()
    {
        $customers = Customer::all();

        $this->assertInstanceOf(Collection::class, $customers);

        foreach ($customers as $customer) {
            $this->assertInstanceOf(Customer::class, $customer);
        }
    }

    /** @test */
    public function serviceApiCreatesCustomers()
    {
        $customer = Customer::create([
            'firstName' => 'John',
            'lastName' => 'Doe',
            'email' => 'jdoe@example.com',
            'emailOptIn' => true,
            'billingAddressId' => 12,
            'shippingCarrierId' => 23,
            'buyingGroupId' => 34,
            'freightTermsId' => 45,
        ]);

        $this->assertInstanceOf(Customer::class, $customer);
    }

    /** @test */
    public function serviceApiFindsASpecificCustomer()
    {
        $customer = Customer::find(1);

        $this->assertInstanceOf(Customer::class, $customer);
    }

    /** @test */
    public function serviceApiUpdatesCustomers()
    {
        $customer = Customer::find(1)->update([
            'firstName' => 'John',
            'lastName' => 'Doe',
            'email' => 'jdoe@example.com',
            'emailOptIn' => true,
            'billingAddressId' => 12,
            'shippingCarrierId' => 23,
            'buyingGroupId' => 34,
            'freightTermsId' => 45,
        ]);

        $this->assertInstanceOf(Customer::class, $customer);
    }

    /** @test */
    public function serviceApiFindsCustomerBillingAddresses()
    {
        $addresses = Customer::find(1)->billingAddresses;

        $this->assertInstanceOf(Collection::class, $addresses);

        foreach ($addresses as $address) {
            $this->assertInstanceOf(Address::class, $address);
        }
    }

    /** @test */
    public function serviceApiFindsCustomerNotes()
    {
        $notes = Customer::find(1)->notes;

        $this->assertInstanceOf(Collection::class, $notes);

        foreach ($notes as $note) {
            $this->assertInstanceOf(CustomerNote::class, $note);
        }
    }

    /** @test */
    public function serviceApiFindsCustomerOrderServices()
    {
        $orderServices = Customer::find(1)->orderServices;

        $this->assertInstanceOf(Collection::class, $orderServices);

        foreach ($orderServices as $orderService) {
            $this->assertInstanceOf(OrderService::class, $orderService);
        }
    }

    /** @test */
    public function serviceApiFindsCustomerPaymentTerms()
    {
        $paymentTerms = Customer::find(1)->paymentTerms;

        $this->assertInstanceOf(Collection::class, $paymentTerms);

        foreach ($paymentTerms as $paymentTerm) {
            $this->assertInstanceOf(PaymentTerm::class, $paymentTerm);
        }
    }

    /** @test */
    public function serviceApiFindsCustomerProductPrices()
    {
        $productPrices = Customer::find(1)->productPrices;

        $this->assertInstanceOf(Collection::class, $productPrices);

        foreach ($productPrices as $productPrice) {
            $this->assertInstanceOf(CustomerProductPrice::class, $productPrice);
        }
    }

    /** @test */
    public function serviceApiFindsCustomerPromotions()
    {
        $promotions = Customer::find(1)->promotions;

        $this->assertInstanceOf(Collection::class, $promotions);

        foreach ($promotions as $promotion) {
            $this->assertInstanceOf(Promotion::class, $promotion);
        }
    }

    /** @test */
    public function serviceApiFindsCustomerShippingAddresses()
    {
        $addresses = Customer::find(1)->shippingAddresses;

        $this->assertInstanceOf(Collection::class, $addresses);

        foreach ($addresses as $address) {
            $this->assertInstanceOf(Address::class, $address);
        }
    }
}

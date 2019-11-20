<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Customer;

class CustomerModelTest extends TestCase
{
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiFindsAllCustomers()
    {
        $customers = Customer::all();

        $this->assertIsArray($customers);

        foreach ($customers as $customer) {
            $this->assertInstanceOf(Customer::class, $customer);
        }
    }

    /** @test */
    public function serviceApiFindsCustomersById()
    {
        $customer = Customer::find(1);

        $this->assertInstanceOf(Customer::class, $customer);
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
            'paymentTermsId' => 56,
            'taxZoneId' => 67,
            'taxExempt' => false,
        ]);

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
            'paymentTermsId' => 56,
            'taxZoneId' => 67,
            'taxExempt' => false,
        ]);

        $this->assertInstanceOf(Customer::class, $customer);
    }

    /** @test */
    public function serviceApiDeletesExistingCustomer()
    {
        $customer = Customer::find(1);

        $this->assertInstanceOf(Customer::class, $customer);

        $response = $customer->delete();

        $this->assertIsArray($response);
    }

    /** @test */
    public function serviceApiDestroysCustomersStatically()
    {
        $response = Customer::destroy(1);

        $this->assertIsArray($response);
    }
}

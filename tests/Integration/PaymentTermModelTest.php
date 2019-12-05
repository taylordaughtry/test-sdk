<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\PaymentTerm;

class PaymentTermModelTest extends TestCase
{
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiFindsAllPaymentTerms()
    {
        $paymentTerms = PaymentTerm::all();

        $this->assertInstanceOf(Collection::class, $paymentTerms);

        foreach ($paymentTerms as $paymentTerm) {
            $this->assertInstanceOf(PaymentTerm::class, $paymentTerm);
        }
    }

    /** @test */
    public function serviceApiFindsASpecificPaymentTerm()
    {
        $paymentTerm = PaymentTerm::find(1);

        $this->assertInstanceOf(PaymentTerm::class, $paymentTerm);
    }
}

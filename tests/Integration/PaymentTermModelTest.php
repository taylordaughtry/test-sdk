<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\PaymentTerm;

class PaymentTermModelTest extends TestCase
{
    use IntegrationServiceApi;

    /** @test */
    public function serviceApiFindsAllPaymentTerms()
    {
        $paymentTerms = PaymentTerm::all();

        $this->assertInstanceOf(Collection::class, $paymentTerms);

        foreach ($paymentTerms as $paymentTerm) {
            $this->assertInstanceOf(PaymentTerm::class, $paymentTerm);
        }

        return $paymentTerms->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllPaymentTerms
     */
    public function serviceApiFindsASpecificPaymentTerm($paymentTermId)
    {
        $paymentTerm = PaymentTerm::find($paymentTermId);

        $this->assertInstanceOf(PaymentTerm::class, $paymentTerm);
    }
}

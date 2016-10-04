<?php

namespace CountryCurrencyConverter\Tests\src\Services;

use CountryCurrencyConverter\src\Services\CurrencyHelper;

class CurrencyHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function convertCurrencyTest() 
    {
        $actualResult = CurrencyHelper::convertCurrency('USD', 'INR', 10);
        
        $this->assertEquals("66.50", $actualResult);
    }

}

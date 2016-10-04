<?php

namespace CountryCurrencyConverter\Tests;

use CountryCurrencyConverter\CurrencyConverter;

class CurrencyConverterTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @test
     */
    public function convertTest()
    {
        $currencyConverter = new CurrencyConverter();
        
        $actualResult = $currencyConverter->convert('USD', 'INR', 10);
        
        $this->assertEquals("66.50 ₹", $actualResult);
    }
}

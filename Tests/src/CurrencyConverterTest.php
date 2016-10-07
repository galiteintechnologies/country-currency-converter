<?php

namespace CountryCurrencyConverter\Tests;

use CountryCurrencyConverter\CurrencyConverter;

class CurrencyConverterTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @test
     */
    public function convertCurrencyTest()
    {
        $get = file_get_contents("https://www.google.com/finance/converter?a=10&from=USD&to=INR");
        $get = explode("<span class=bld>",$get);
        $get = explode("</span>",$get[1]);  
        $exceptedResult = preg_replace("/[^0-9\.]/", null, $get[0]);
        
        $currencyConverter = new CurrencyConverter();
        
        $actualResult = $currencyConverter->convertCurrency('USD', 'INR', 10);
        
        $this->assertEquals($exceptedResult." ₹", $actualResult);
    }
}

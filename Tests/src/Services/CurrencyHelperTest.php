<?php

namespace CountryCurrencyConverter\Tests\src\Services;

use CountryCurrencyConverter\src\Services\CurrencyHelper;

class CurrencyHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function convertTest() 
    {        
        $get = file_get_contents("https://www.google.com/finance/converter?a=10&from=USD&to=INR");
        $get = explode("<span class=bld>",$get);
        $get = explode("</span>",$get[1]);  
        $exceptedResult = preg_replace("/[^0-9\.]/", null, $get[0]);
        
        $actualResult = CurrencyHelper::convert('USD', 'INR', 10, false);
        
        
        $this->assertEquals($exceptedResult, $actualResult);
    }

}

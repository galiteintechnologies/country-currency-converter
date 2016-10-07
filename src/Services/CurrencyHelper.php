<?php

/*
 * This file is part of the Country Currency Converter
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CountryCurrencyConverter\src\Services;

class CurrencyHelper {
    
    /**
     * 
     * @param string $from
     * @param string $to
     * @param int    $amount [optional]
     * @param bool   $round [optional]     
     * 
     * @return float
     */
    public static function convert($from, $to, $amount, $round) {
        
        $params = "a=".urlencode($amount)."&from=".urlencode($from)."&to=".urlencode($to);        
        $get = file_get_contents("https://www.google.com/finance/converter?".$params);
        $get = explode("<span class=bld>",$get);
        $get = explode("</span>",$get[1]);  
        $converted_amount = preg_replace("/[^0-9\.]/", null, $get[0]);
        
        return ($round ? number_format($converted_amount, 2) : $converted_amount);
    }
    
}
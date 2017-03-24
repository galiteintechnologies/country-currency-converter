# Country Currency Converter
Convert country currency by currency code.

[![Latest Version](https://img.shields.io/packagist/v/nexuslinkservices/country-currency-converter.svg?style=flat-square)](https://packagist.org/packages/nexuslinkservices/country-currency-converter)
[![Software License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nexuslinkservices/country-currency-converter/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/country-currency-converter/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/nexuslinkservices/country-currency-converter/badges/build.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/country-currency-converter/build-status/master)

## Installation

If you use composer, you can add this package by running 

````
composer require galiteintechnologies/country-currency-converter
````

## Usage

```
<?php

use CountryCurrencyConverter\CurrencyConverter;

$currencyConverter = new CurrencyConverter();

$result = $currencyConverter->convertCurrency('USD', 'INR', 1); 
echo $result.'<br/>';

$result = $currencyConverter->convertCurrency('USD', 'INR', 1, false);
echo $result.'<br/>';

$result = $currencyConverter->convertCurrency('USD', 'INR', 1, false, false);
echo $result;
```

## Output

```
66.59 ₹ //With round value and currency symbol
66.5922 ₹ //without round value
66.5922 // without round value and currency symbol
```

## CONTRIBUTING:

Pull requests are always welcome.

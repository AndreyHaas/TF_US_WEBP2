<?php

class meterReading
{
    public static $meter_reading = 0;
    
    public static function increaseCounterReading()
    {
        self::$meter_reading += 2;
    }

    public static function showCounterReading()
    {
        return self::$meter_reading;
    }
}

meterReading::increaseCounterReading();
meterReading::increaseCounterReading();

echo "Zaehlerstand: ".meterReading::showCounterReading();
meterReading::increaseCounterReading();
echo "<br>";
echo "Zaehlerstand: ".meterReading::showCounterReading();
?>
<!--
https://www.w3schools.com/php/php_oop_what_is.asp
-->

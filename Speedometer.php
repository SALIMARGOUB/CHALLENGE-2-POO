<?php


class SpeedoMeter{

      public const CONVERSION_MILES= 1.609;
      public const CONVERSION_KM = 0.621371;

      
      
      
      public static function convertMilesToKm (float $kilomètre): float{

        return $kilomètre * self::CONVERSION_MILES;
      }
     
      public static function convertKmToMiles (float $miles): float{

        return $miles * self::CONVERSION_KM;
      }
}
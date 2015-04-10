<?php

namespace Herzen\Utils;

class RandomUtils {

    public static function getRandomValueFromArray($array) {
        if (!empty($array)) {
            return $array[self::getRandomKeyFromArray($array)];
        }
    }

    public static function getRandomKeyFromArray($array) {
        if (!empty($array)) {
            return rand(0, count($array)-1);
        }
    }

}
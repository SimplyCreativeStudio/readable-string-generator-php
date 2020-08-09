<?php

namespace Nordpeak;

class ReadableStringGenerator
{   

    public static $vowels = ['A','E','I','O','U'];
    public static $consonants = ['B','C','D','F','G','H','J','K','L','M','N','P','R','S','T','V','W','X','Y','Z'];

    /**
     * Generate
     *
     * @param  array $params
     * @return string
     */
    public static function generate(Array $params = [])
    {
        $defaults = [
            'length' => 6
        ];

        $params = array_merge($defaults, $params);

        $string = '';
        for ($i = 1; $i <= ceil($params['length'] / 2); $i++) {
            $string .= self::$consonants[mt_rand(0, count(self::$consonants) - 1)] . self::$vowels[mt_rand(0, count(self::$vowels) - 1)];
        }

        return substr($string, 0, $params['length']);
    }
}

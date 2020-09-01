<?php

namespace tl\mx\Client\Model;
use \tl\mx\Client\ObjectSerializer;

class CatalogoClaveMoneda
{
    
    const MXP = 'MXP';
    const USD = 'USD';
    const EUR = 'EUR';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::MXP,
            self::USD,
            self::EUR,
        ];
    }
}

<?php

namespace tl\mx\Client\Model;
use \tl\mx\Client\ObjectSerializer;

class CatalogoTipoDomicilio
{
    
    const N = 'N';
    const C = 'C';
    const P = 'P';
    const E = 'E';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::N,
            self::C,
            self::P,
            self::E,
        ];
    }
}

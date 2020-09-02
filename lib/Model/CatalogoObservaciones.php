<?php

namespace tl\mx\Client\Model;
use \tl\mx\Client\ObjectSerializer;

class CatalogoObservaciones
{
    
    const N01 = 'N01';
    const R01 = 'R01';
    const A01 = 'A01';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::N01,
            self::R01,
            self::A01,
        ];
    }
}

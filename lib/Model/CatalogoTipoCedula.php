<?php

namespace tl\mx\Client\Model;
use \tl\mx\Client\ObjectSerializer;

class CatalogoTipoCedula
{
    
    const C1 = 'C1';
    const A1 = 'A1';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::C1,
            self::A1,
        ];
    }
}

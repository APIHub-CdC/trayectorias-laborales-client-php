<?php

namespace tl\mx\Client\Model;

use \ArrayAccess;
use \tl\mx\Client\ObjectSerializer;

class DomicilioConsulta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $tlModelName = 'DomicilioConsulta';
    
    protected static $tlTypes = [
        'direccion' => 'string',
        'colonia' => 'string',
        'cp' => 'string'
    ];
    
    protected static $tlFormats = [
        'direccion' => null,
        'colonia' => null,
        'cp' => null
    ];
    
    public static function tlTypes()
    {
        return self::$tlTypes;
    }
    
    public static function tlFormats()
    {
        return self::$tlFormats;
    }
    
    protected static $attributeMap = [
        'direccion' => 'direccion',
        'colonia' => 'colonia',
        'cp' => 'cp'
    ];
    
    protected static $setters = [
        'direccion' => 'setDireccion',
        'colonia' => 'setColonia',
        'cp' => 'setCp'
    ];
    
    protected static $getters = [
        'direccion' => 'getDireccion',
        'colonia' => 'getColonia',
        'cp' => 'getCp'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$tlModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['direccion'] = isset($data['direccion']) ? $data['direccion'] : null;
        $this->container['colonia'] = isset($data['colonia']) ? $data['colonia'] : null;
        $this->container['cp'] = isset($data['cp']) ? $data['cp'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['direccion'] === null) {
            $invalidProperties[] = "'direccion' can't be null";
        }
        if ($this->container['colonia'] === null) {
            $invalidProperties[] = "'colonia' can't be null";
        }
        if ($this->container['cp'] === null) {
            $invalidProperties[] = "'cp' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getDireccion()
    {
        return $this->container['direccion'];
    }
    
    public function setDireccion($direccion)
    {
        $this->container['direccion'] = $direccion;
        return $this;
    }
    
    public function getColonia()
    {
        return $this->container['colonia'];
    }
    
    public function setColonia($colonia)
    {
        $this->container['colonia'] = $colonia;
        return $this;
    }
    
    public function getCp()
    {
        return $this->container['cp'];
    }
    
    public function setCp($cp)
    {
        $this->container['cp'] = $cp;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

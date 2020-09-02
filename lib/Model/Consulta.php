<?php

namespace tl\mx\Client\Model;

use \ArrayAccess;
use \tl\mx\Client\ObjectSerializer;

class Consulta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $tlModelName = 'Consulta';
    
    protected static $tlTypes = [
        'fecha' => 'string',
        'tipo_negocio' => 'string',
        'puesto_solicitado' => 'string',
        'domicilio' => '\tl\mx\Client\Model\Domicilio'
    ];
    
    protected static $tlFormats = [
        'fecha' => null,
        'tipo_negocio' => null,
        'puesto_solicitado' => null,
        'domicilio' => null
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
        'fecha' => 'fecha',
        'tipo_negocio' => 'tipoNegocio',
        'puesto_solicitado' => 'puestoSolicitado',
        'domicilio' => 'domicilio'
    ];
    
    protected static $setters = [
        'fecha' => 'setFecha',
        'tipo_negocio' => 'setTipoNegocio',
        'puesto_solicitado' => 'setPuestoSolicitado',
        'domicilio' => 'setDomicilio'
    ];
    
    protected static $getters = [
        'fecha' => 'getFecha',
        'tipo_negocio' => 'getTipoNegocio',
        'puesto_solicitado' => 'getPuestoSolicitado',
        'domicilio' => 'getDomicilio'
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
        $this->container['fecha'] = isset($data['fecha']) ? $data['fecha'] : null;
        $this->container['tipo_negocio'] = isset($data['tipo_negocio']) ? $data['tipo_negocio'] : null;
        $this->container['puesto_solicitado'] = isset($data['puesto_solicitado']) ? $data['puesto_solicitado'] : null;
        $this->container['domicilio'] = isset($data['domicilio']) ? $data['domicilio'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFecha()
    {
        return $this->container['fecha'];
    }
    
    public function setFecha($fecha)
    {
        $this->container['fecha'] = $fecha;
        return $this;
    }
    
    public function getTipoNegocio()
    {
        return $this->container['tipo_negocio'];
    }
    
    public function setTipoNegocio($tipo_negocio)
    {
        $this->container['tipo_negocio'] = $tipo_negocio;
        return $this;
    }
    
    public function getPuestoSolicitado()
    {
        return $this->container['puesto_solicitado'];
    }
    
    public function setPuestoSolicitado($puesto_solicitado)
    {
        $this->container['puesto_solicitado'] = $puesto_solicitado;
        return $this;
    }
    
    public function getDomicilio()
    {
        return $this->container['domicilio'];
    }
    
    public function setDomicilio($domicilio)
    {
        $this->container['domicilio'] = $domicilio;
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

<?php

namespace tl\mx\Client\Model;

use \ArrayAccess;
use \tl\mx\Client\ObjectSerializer;

class Respuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $tlModelName = 'Respuesta';
    
    protected static $tlTypes = [
        'encabezado' => '\tl\mx\Client\Model\Encabezado',
        'persona' => '\tl\mx\Client\Model\Persona',
        'empleos' => '\tl\mx\Client\Model\Empleo[]',
        'consultas' => '\tl\mx\Client\Model\Consulta[]',
        'cedulas' => '\tl\mx\Client\Model\Cedula[]',
        'lista_pld' => '\tl\mx\Client\Model\Lista[]',
        'lista_pep' => '\tl\mx\Client\Model\Lista[]',
        'lista_otra' => '\tl\mx\Client\Model\Lista[]'
    ];
    
    protected static $tlFormats = [
        'encabezado' => null,
        'persona' => null,
        'empleos' => null,
        'consultas' => null,
        'cedulas' => null,
        'lista_pld' => null,
        'lista_pep' => null,
        'lista_otra' => null
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
        'encabezado' => 'encabezado',
        'persona' => 'persona',
        'empleos' => 'empleos',
        'consultas' => 'consultas',
        'cedulas' => 'cedulas',
        'lista_pld' => 'listaPld',
        'lista_pep' => 'listaPep',
        'lista_otra' => 'listaOtra'
    ];
    
    protected static $setters = [
        'encabezado' => 'setEncabezado',
        'persona' => 'setPersona',
        'empleos' => 'setEmpleos',
        'consultas' => 'setConsultas',
        'cedulas' => 'setCedulas',
        'lista_pld' => 'setListaPld',
        'lista_pep' => 'setListaPep',
        'lista_otra' => 'setListaOtra'
    ];
    
    protected static $getters = [
        'encabezado' => 'getEncabezado',
        'persona' => 'getPersona',
        'empleos' => 'getEmpleos',
        'consultas' => 'getConsultas',
        'cedulas' => 'getCedulas',
        'lista_pld' => 'getListaPld',
        'lista_pep' => 'getListaPep',
        'lista_otra' => 'getListaOtra'
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
        $this->container['encabezado'] = isset($data['encabezado']) ? $data['encabezado'] : null;
        $this->container['persona'] = isset($data['persona']) ? $data['persona'] : null;
        $this->container['empleos'] = isset($data['empleos']) ? $data['empleos'] : null;
        $this->container['consultas'] = isset($data['consultas']) ? $data['consultas'] : null;
        $this->container['cedulas'] = isset($data['cedulas']) ? $data['cedulas'] : null;
        $this->container['lista_pld'] = isset($data['lista_pld']) ? $data['lista_pld'] : null;
        $this->container['lista_pep'] = isset($data['lista_pep']) ? $data['lista_pep'] : null;
        $this->container['lista_otra'] = isset($data['lista_otra']) ? $data['lista_otra'] : null;
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
    
    public function getEncabezado()
    {
        return $this->container['encabezado'];
    }
    
    public function setEncabezado($encabezado)
    {
        $this->container['encabezado'] = $encabezado;
        return $this;
    }
    
    public function getPersona()
    {
        return $this->container['persona'];
    }
    
    public function setPersona($persona)
    {
        $this->container['persona'] = $persona;
        return $this;
    }
    
    public function getEmpleos()
    {
        return $this->container['empleos'];
    }
    
    public function setEmpleos($empleos)
    {
        $this->container['empleos'] = $empleos;
        return $this;
    }
    
    public function getConsultas()
    {
        return $this->container['consultas'];
    }
    
    public function setConsultas($consultas)
    {
        $this->container['consultas'] = $consultas;
        return $this;
    }
    
    public function getCedulas()
    {
        return $this->container['cedulas'];
    }
    
    public function setCedulas($cedulas)
    {
        $this->container['cedulas'] = $cedulas;
        return $this;
    }
    
    public function getListaPld()
    {
        return $this->container['lista_pld'];
    }
    
    public function setListaPld($lista_pld)
    {
        $this->container['lista_pld'] = $lista_pld;
        return $this;
    }
    
    public function getListaPep()
    {
        return $this->container['lista_pep'];
    }
    
    public function setListaPep($lista_pep)
    {
        $this->container['lista_pep'] = $lista_pep;
        return $this;
    }
    
    public function getListaOtra()
    {
        return $this->container['lista_otra'];
    }
    
    public function setListaOtra($lista_otra)
    {
        $this->container['lista_otra'] = $lista_otra;
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

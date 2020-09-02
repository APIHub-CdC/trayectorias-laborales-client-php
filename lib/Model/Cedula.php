<?php

namespace tl\mx\Client\Model;

use \ArrayAccess;
use \tl\mx\Client\ObjectSerializer;

class Cedula implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $tlModelName = 'Cedula';
    
    protected static $tlTypes = [
        'numero' => 'float',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'nombres' => 'string',
        'sexo' => '\tl\mx\Client\Model\CatalogoSexoCedula',
        'profesion' => 'string',
        'anio_expedicion' => 'float',
        'institucion' => 'string',
        'tipo' => '\tl\mx\Client\Model\CatalogoTipoCedula',
        'clave_arc' => 'string'
    ];
    
    protected static $tlFormats = [
        'numero' => null,
        'apellido_paterno' => null,
        'apellido_materno' => null,
        'nombres' => null,
        'sexo' => null,
        'profesion' => null,
        'anio_expedicion' => null,
        'institucion' => null,
        'tipo' => null,
        'clave_arc' => null
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
        'numero' => 'numero',
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno',
        'nombres' => 'nombres',
        'sexo' => 'sexo',
        'profesion' => 'profesion',
        'anio_expedicion' => 'anioExpedicion',
        'institucion' => 'institucion',
        'tipo' => 'tipo',
        'clave_arc' => 'claveArc'
    ];
    
    protected static $setters = [
        'numero' => 'setNumero',
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno',
        'nombres' => 'setNombres',
        'sexo' => 'setSexo',
        'profesion' => 'setProfesion',
        'anio_expedicion' => 'setAnioExpedicion',
        'institucion' => 'setInstitucion',
        'tipo' => 'setTipo',
        'clave_arc' => 'setClaveArc'
    ];
    
    protected static $getters = [
        'numero' => 'getNumero',
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno',
        'nombres' => 'getNombres',
        'sexo' => 'getSexo',
        'profesion' => 'getProfesion',
        'anio_expedicion' => 'getAnioExpedicion',
        'institucion' => 'getInstitucion',
        'tipo' => 'getTipo',
        'clave_arc' => 'getClaveArc'
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
        $this->container['numero'] = isset($data['numero']) ? $data['numero'] : null;
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
        $this->container['nombres'] = isset($data['nombres']) ? $data['nombres'] : null;
        $this->container['sexo'] = isset($data['sexo']) ? $data['sexo'] : null;
        $this->container['profesion'] = isset($data['profesion']) ? $data['profesion'] : null;
        $this->container['anio_expedicion'] = isset($data['anio_expedicion']) ? $data['anio_expedicion'] : null;
        $this->container['institucion'] = isset($data['institucion']) ? $data['institucion'] : null;
        $this->container['tipo'] = isset($data['tipo']) ? $data['tipo'] : null;
        $this->container['clave_arc'] = isset($data['clave_arc']) ? $data['clave_arc'] : null;
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
    
    public function getNumero()
    {
        return $this->container['numero'];
    }
    
    public function setNumero($numero)
    {
        $this->container['numero'] = $numero;
        return $this;
    }
    
    public function getApellidoPaterno()
    {
        return $this->container['apellido_paterno'];
    }
    
    public function setApellidoPaterno($apellido_paterno)
    {
        $this->container['apellido_paterno'] = $apellido_paterno;
        return $this;
    }
    
    public function getApellidoMaterno()
    {
        return $this->container['apellido_materno'];
    }
    
    public function setApellidoMaterno($apellido_materno)
    {
        $this->container['apellido_materno'] = $apellido_materno;
        return $this;
    }
    
    public function getNombres()
    {
        return $this->container['nombres'];
    }
    
    public function setNombres($nombres)
    {
        $this->container['nombres'] = $nombres;
        return $this;
    }
    
    public function getSexo()
    {
        return $this->container['sexo'];
    }
    
    public function setSexo($sexo)
    {
        $this->container['sexo'] = $sexo;
        return $this;
    }
    
    public function getProfesion()
    {
        return $this->container['profesion'];
    }
    
    public function setProfesion($profesion)
    {
        $this->container['profesion'] = $profesion;
        return $this;
    }
    
    public function getAnioExpedicion()
    {
        return $this->container['anio_expedicion'];
    }
    
    public function setAnioExpedicion($anio_expedicion)
    {
        $this->container['anio_expedicion'] = $anio_expedicion;
        return $this;
    }
    
    public function getInstitucion()
    {
        return $this->container['institucion'];
    }
    
    public function setInstitucion($institucion)
    {
        $this->container['institucion'] = $institucion;
        return $this;
    }
    
    public function getTipo()
    {
        return $this->container['tipo'];
    }
    
    public function setTipo($tipo)
    {
        $this->container['tipo'] = $tipo;
        return $this;
    }
    
    public function getClaveArc()
    {
        return $this->container['clave_arc'];
    }
    
    public function setClaveArc($clave_arc)
    {
        $this->container['clave_arc'] = $clave_arc;
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

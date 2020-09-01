<?php

namespace tl\mx\Client\Model;

use \ArrayAccess;
use \tl\mx\Client\ObjectSerializer;

class PersonaConsulta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $tlModelName = 'PersonaConsulta';
    
    protected static $tlTypes = [
        'primer_nombre' => 'string',
        'segundo_nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'fecha_nacimiento' => 'string',
        'sexo' => '\tl\mx\Client\Model\CatalogoSexoPersona'
    ];
    
    protected static $tlFormats = [
        'primer_nombre' => null,
        'segundo_nombre' => null,
        'apellido_paterno' => null,
        'apellido_materno' => null,
        'fecha_nacimiento' => null,
        'sexo' => null
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
        'primer_nombre' => 'primerNombre',
        'segundo_nombre' => 'segundoNombre',
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno',
        'fecha_nacimiento' => 'fechaNacimiento',
        'sexo' => 'sexo'
    ];
    
    protected static $setters = [
        'primer_nombre' => 'setPrimerNombre',
        'segundo_nombre' => 'setSegundoNombre',
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno',
        'fecha_nacimiento' => 'setFechaNacimiento',
        'sexo' => 'setSexo'
    ];
    
    protected static $getters = [
        'primer_nombre' => 'getPrimerNombre',
        'segundo_nombre' => 'getSegundoNombre',
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno',
        'fecha_nacimiento' => 'getFechaNacimiento',
        'sexo' => 'getSexo'
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
        $this->container['primer_nombre'] = isset($data['primer_nombre']) ? $data['primer_nombre'] : null;
        $this->container['segundo_nombre'] = isset($data['segundo_nombre']) ? $data['segundo_nombre'] : null;
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
        $this->container['fecha_nacimiento'] = isset($data['fecha_nacimiento']) ? $data['fecha_nacimiento'] : null;
        $this->container['sexo'] = isset($data['sexo']) ? $data['sexo'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['primer_nombre'] === null) {
            $invalidProperties[] = "'primer_nombre' can't be null";
        }
        if ($this->container['apellido_paterno'] === null) {
            $invalidProperties[] = "'apellido_paterno' can't be null";
        }
        if ($this->container['apellido_materno'] === null) {
            $invalidProperties[] = "'apellido_materno' can't be null";
        }
        if ($this->container['fecha_nacimiento'] === null) {
            $invalidProperties[] = "'fecha_nacimiento' can't be null";
        }
        if ($this->container['sexo'] === null) {
            $invalidProperties[] = "'sexo' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getPrimerNombre()
    {
        return $this->container['primer_nombre'];
    }
    
    public function setPrimerNombre($primer_nombre)
    {
        $this->container['primer_nombre'] = $primer_nombre;
        return $this;
    }
    
    public function getSegundoNombre()
    {
        return $this->container['segundo_nombre'];
    }
    
    public function setSegundoNombre($segundo_nombre)
    {
        $this->container['segundo_nombre'] = $segundo_nombre;
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
    
    public function getFechaNacimiento()
    {
        return $this->container['fecha_nacimiento'];
    }
    
    public function setFechaNacimiento($fecha_nacimiento)
    {
        $this->container['fecha_nacimiento'] = $fecha_nacimiento;
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

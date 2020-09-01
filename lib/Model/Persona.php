<?php

namespace tl\mx\Client\Model;

use \ArrayAccess;
use \tl\mx\Client\ObjectSerializer;

class Persona implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $tlModelName = 'Persona';
    
    protected static $tlTypes = [
        'primer_nombre' => 'string',
        'segundo_nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'apellido_adicional' => 'string',
        'fecha_nacimiento' => 'string',
        'rfc' => 'string',
        'curp' => 'string',
        'nss' => 'string',
        'entidad_afiliadora' => '\tl\mx\Client\Model\CatalogoEntidadAfiliadora',
        'nacionalidad' => '\tl\mx\Client\Model\CatalogoNacionalidad',
        'estado_civil' => '\tl\mx\Client\Model\CatalogoEstadoCivil',
        'sexo' => '\tl\mx\Client\Model\CatalogoSexoPersona',
        'residencia' => '\tl\mx\Client\Model\CatalogoResidencia'
    ];
    
    protected static $tlFormats = [
        'primer_nombre' => null,
        'segundo_nombre' => null,
        'apellido_paterno' => null,
        'apellido_materno' => null,
        'apellido_adicional' => null,
        'fecha_nacimiento' => null,
        'rfc' => null,
        'curp' => null,
        'nss' => null,
        'entidad_afiliadora' => null,
        'nacionalidad' => null,
        'estado_civil' => null,
        'sexo' => null,
        'residencia' => null
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
        'apellido_adicional' => 'apellidoAdicional',
        'fecha_nacimiento' => 'fechaNacimiento',
        'rfc' => 'RFC',
        'curp' => 'CURP',
        'nss' => 'NSS',
        'entidad_afiliadora' => 'entidadAfiliadora',
        'nacionalidad' => 'nacionalidad',
        'estado_civil' => 'estadoCivil',
        'sexo' => 'sexo',
        'residencia' => 'residencia'
    ];
    
    protected static $setters = [
        'primer_nombre' => 'setPrimerNombre',
        'segundo_nombre' => 'setSegundoNombre',
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno',
        'apellido_adicional' => 'setApellidoAdicional',
        'fecha_nacimiento' => 'setFechaNacimiento',
        'rfc' => 'setRfc',
        'curp' => 'setCurp',
        'nss' => 'setNss',
        'entidad_afiliadora' => 'setEntidadAfiliadora',
        'nacionalidad' => 'setNacionalidad',
        'estado_civil' => 'setEstadoCivil',
        'sexo' => 'setSexo',
        'residencia' => 'setResidencia'
    ];
    
    protected static $getters = [
        'primer_nombre' => 'getPrimerNombre',
        'segundo_nombre' => 'getSegundoNombre',
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno',
        'apellido_adicional' => 'getApellidoAdicional',
        'fecha_nacimiento' => 'getFechaNacimiento',
        'rfc' => 'getRfc',
        'curp' => 'getCurp',
        'nss' => 'getNss',
        'entidad_afiliadora' => 'getEntidadAfiliadora',
        'nacionalidad' => 'getNacionalidad',
        'estado_civil' => 'getEstadoCivil',
        'sexo' => 'getSexo',
        'residencia' => 'getResidencia'
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
        $this->container['apellido_adicional'] = isset($data['apellido_adicional']) ? $data['apellido_adicional'] : null;
        $this->container['fecha_nacimiento'] = isset($data['fecha_nacimiento']) ? $data['fecha_nacimiento'] : null;
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['curp'] = isset($data['curp']) ? $data['curp'] : null;
        $this->container['nss'] = isset($data['nss']) ? $data['nss'] : null;
        $this->container['entidad_afiliadora'] = isset($data['entidad_afiliadora']) ? $data['entidad_afiliadora'] : null;
        $this->container['nacionalidad'] = isset($data['nacionalidad']) ? $data['nacionalidad'] : null;
        $this->container['estado_civil'] = isset($data['estado_civil']) ? $data['estado_civil'] : null;
        $this->container['sexo'] = isset($data['sexo']) ? $data['sexo'] : null;
        $this->container['residencia'] = isset($data['residencia']) ? $data['residencia'] : null;
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
    
    public function getApellidoAdicional()
    {
        return $this->container['apellido_adicional'];
    }
    
    public function setApellidoAdicional($apellido_adicional)
    {
        $this->container['apellido_adicional'] = $apellido_adicional;
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
    
    public function getRfc()
    {
        return $this->container['rfc'];
    }
    
    public function setRfc($rfc)
    {
        $this->container['rfc'] = $rfc;
        return $this;
    }
    
    public function getCurp()
    {
        return $this->container['curp'];
    }
    
    public function setCurp($curp)
    {
        $this->container['curp'] = $curp;
        return $this;
    }
    
    public function getNss()
    {
        return $this->container['nss'];
    }
    
    public function setNss($nss)
    {
        $this->container['nss'] = $nss;
        return $this;
    }
    
    public function getEntidadAfiliadora()
    {
        return $this->container['entidad_afiliadora'];
    }
    
    public function setEntidadAfiliadora($entidad_afiliadora)
    {
        $this->container['entidad_afiliadora'] = $entidad_afiliadora;
        return $this;
    }
    
    public function getNacionalidad()
    {
        return $this->container['nacionalidad'];
    }
    
    public function setNacionalidad($nacionalidad)
    {
        $this->container['nacionalidad'] = $nacionalidad;
        return $this;
    }
    
    public function getEstadoCivil()
    {
        return $this->container['estado_civil'];
    }
    
    public function setEstadoCivil($estado_civil)
    {
        $this->container['estado_civil'] = $estado_civil;
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
    
    public function getResidencia()
    {
        return $this->container['residencia'];
    }
    
    public function setResidencia($residencia)
    {
        $this->container['residencia'] = $residencia;
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

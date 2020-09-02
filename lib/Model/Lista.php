<?php

namespace tl\mx\Client\Model;

use \ArrayAccess;
use \tl\mx\Client\ObjectSerializer;

class Lista implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $tlModelName = 'Lista';
    
    protected static $tlTypes = [
        'nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'curp' => 'string',
        'fecha_nacimiento' => 'string',
        'lista' => 'string',
        'estatus' => 'string',
        'dependencia' => 'string',
        'puesto' => 'string',
        'nivel' => 'float',
        'parentesco' => 'string',
        'issste' => 'string'
    ];
    
    protected static $tlFormats = [
        'nombre' => null,
        'apellido_paterno' => null,
        'apellido_materno' => null,
        'curp' => null,
        'fecha_nacimiento' => null,
        'lista' => null,
        'estatus' => null,
        'dependencia' => null,
        'puesto' => null,
        'nivel' => null,
        'parentesco' => null,
        'issste' => null
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
        'nombre' => 'nombre',
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno',
        'curp' => 'CURP',
        'fecha_nacimiento' => 'fechaNacimiento',
        'lista' => 'lista',
        'estatus' => 'estatus',
        'dependencia' => 'dependencia',
        'puesto' => 'puesto',
        'nivel' => 'nivel',
        'parentesco' => 'parentesco',
        'issste' => 'ISSSTE'
    ];
    
    protected static $setters = [
        'nombre' => 'setNombre',
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno',
        'curp' => 'setCurp',
        'fecha_nacimiento' => 'setFechaNacimiento',
        'lista' => 'setLista',
        'estatus' => 'setEstatus',
        'dependencia' => 'setDependencia',
        'puesto' => 'setPuesto',
        'nivel' => 'setNivel',
        'parentesco' => 'setParentesco',
        'issste' => 'setIssste'
    ];
    
    protected static $getters = [
        'nombre' => 'getNombre',
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno',
        'curp' => 'getCurp',
        'fecha_nacimiento' => 'getFechaNacimiento',
        'lista' => 'getLista',
        'estatus' => 'getEstatus',
        'dependencia' => 'getDependencia',
        'puesto' => 'getPuesto',
        'nivel' => 'getNivel',
        'parentesco' => 'getParentesco',
        'issste' => 'getIssste'
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
        $this->container['nombre'] = isset($data['nombre']) ? $data['nombre'] : null;
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
        $this->container['curp'] = isset($data['curp']) ? $data['curp'] : null;
        $this->container['fecha_nacimiento'] = isset($data['fecha_nacimiento']) ? $data['fecha_nacimiento'] : null;
        $this->container['lista'] = isset($data['lista']) ? $data['lista'] : null;
        $this->container['estatus'] = isset($data['estatus']) ? $data['estatus'] : null;
        $this->container['dependencia'] = isset($data['dependencia']) ? $data['dependencia'] : null;
        $this->container['puesto'] = isset($data['puesto']) ? $data['puesto'] : null;
        $this->container['nivel'] = isset($data['nivel']) ? $data['nivel'] : null;
        $this->container['parentesco'] = isset($data['parentesco']) ? $data['parentesco'] : null;
        $this->container['issste'] = isset($data['issste']) ? $data['issste'] : null;
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
    
    public function getNombre()
    {
        return $this->container['nombre'];
    }
    
    public function setNombre($nombre)
    {
        $this->container['nombre'] = $nombre;
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
    
    public function getCurp()
    {
        return $this->container['curp'];
    }
    
    public function setCurp($curp)
    {
        $this->container['curp'] = $curp;
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
    
    public function getLista()
    {
        return $this->container['lista'];
    }
    
    public function setLista($lista)
    {
        $this->container['lista'] = $lista;
        return $this;
    }
    
    public function getEstatus()
    {
        return $this->container['estatus'];
    }
    
    public function setEstatus($estatus)
    {
        $this->container['estatus'] = $estatus;
        return $this;
    }
    
    public function getDependencia()
    {
        return $this->container['dependencia'];
    }
    
    public function setDependencia($dependencia)
    {
        $this->container['dependencia'] = $dependencia;
        return $this;
    }
    
    public function getPuesto()
    {
        return $this->container['puesto'];
    }
    
    public function setPuesto($puesto)
    {
        $this->container['puesto'] = $puesto;
        return $this;
    }
    
    public function getNivel()
    {
        return $this->container['nivel'];
    }
    
    public function setNivel($nivel)
    {
        $this->container['nivel'] = $nivel;
        return $this;
    }
    
    public function getParentesco()
    {
        return $this->container['parentesco'];
    }
    
    public function setParentesco($parentesco)
    {
        $this->container['parentesco'] = $parentesco;
        return $this;
    }
    
    public function getIssste()
    {
        return $this->container['issste'];
    }
    
    public function setIssste($issste)
    {
        $this->container['issste'] = $issste;
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

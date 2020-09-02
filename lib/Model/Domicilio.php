<?php

namespace tl\mx\Client\Model;

use \ArrayAccess;
use \tl\mx\Client\ObjectSerializer;

class Domicilio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $tlModelName = 'Domicilio';
    
    protected static $tlTypes = [
        'direccion' => 'string',
        'colonia' => 'string',
        'delegacion' => 'string',
        'ciudad' => 'string',
        'estado' => '\tl\mx\Client\Model\CatalogoEstado',
        'cp' => 'string',
        'fecha_residencia' => 'string',
        'telefono' => 'string',
        'telefono_celular' => 'string',
        'tipo_domicilio' => '\tl\mx\Client\Model\CatalogoTipoDomicilio'
    ];
    
    protected static $tlFormats = [
        'direccion' => null,
        'colonia' => null,
        'delegacion' => null,
        'ciudad' => null,
        'estado' => null,
        'cp' => null,
        'fecha_residencia' => null,
        'telefono' => null,
        'telefono_celular' => null,
        'tipo_domicilio' => null
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
        'delegacion' => 'delegacion',
        'ciudad' => 'ciudad',
        'estado' => 'estado',
        'cp' => 'cp',
        'fecha_residencia' => 'fechaResidencia',
        'telefono' => 'telefono',
        'telefono_celular' => 'telefonoCelular',
        'tipo_domicilio' => 'tipoDomicilio'
    ];
    
    protected static $setters = [
        'direccion' => 'setDireccion',
        'colonia' => 'setColonia',
        'delegacion' => 'setDelegacion',
        'ciudad' => 'setCiudad',
        'estado' => 'setEstado',
        'cp' => 'setCp',
        'fecha_residencia' => 'setFechaResidencia',
        'telefono' => 'setTelefono',
        'telefono_celular' => 'setTelefonoCelular',
        'tipo_domicilio' => 'setTipoDomicilio'
    ];
    
    protected static $getters = [
        'direccion' => 'getDireccion',
        'colonia' => 'getColonia',
        'delegacion' => 'getDelegacion',
        'ciudad' => 'getCiudad',
        'estado' => 'getEstado',
        'cp' => 'getCp',
        'fecha_residencia' => 'getFechaResidencia',
        'telefono' => 'getTelefono',
        'telefono_celular' => 'getTelefonoCelular',
        'tipo_domicilio' => 'getTipoDomicilio'
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
        $this->container['delegacion'] = isset($data['delegacion']) ? $data['delegacion'] : null;
        $this->container['ciudad'] = isset($data['ciudad']) ? $data['ciudad'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
        $this->container['cp'] = isset($data['cp']) ? $data['cp'] : null;
        $this->container['fecha_residencia'] = isset($data['fecha_residencia']) ? $data['fecha_residencia'] : null;
        $this->container['telefono'] = isset($data['telefono']) ? $data['telefono'] : null;
        $this->container['telefono_celular'] = isset($data['telefono_celular']) ? $data['telefono_celular'] : null;
        $this->container['tipo_domicilio'] = isset($data['tipo_domicilio']) ? $data['tipo_domicilio'] : null;
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
    
    public function getDelegacion()
    {
        return $this->container['delegacion'];
    }
    
    public function setDelegacion($delegacion)
    {
        $this->container['delegacion'] = $delegacion;
        return $this;
    }
    
    public function getCiudad()
    {
        return $this->container['ciudad'];
    }
    
    public function setCiudad($ciudad)
    {
        $this->container['ciudad'] = $ciudad;
        return $this;
    }
    
    public function getEstado()
    {
        return $this->container['estado'];
    }
    
    public function setEstado($estado)
    {
        $this->container['estado'] = $estado;
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
    
    public function getFechaResidencia()
    {
        return $this->container['fecha_residencia'];
    }
    
    public function setFechaResidencia($fecha_residencia)
    {
        $this->container['fecha_residencia'] = $fecha_residencia;
        return $this;
    }
    
    public function getTelefono()
    {
        return $this->container['telefono'];
    }
    
    public function setTelefono($telefono)
    {
        $this->container['telefono'] = $telefono;
        return $this;
    }
    
    public function getTelefonoCelular()
    {
        return $this->container['telefono_celular'];
    }
    
    public function setTelefonoCelular($telefono_celular)
    {
        $this->container['telefono_celular'] = $telefono_celular;
        return $this;
    }
    
    public function getTipoDomicilio()
    {
        return $this->container['tipo_domicilio'];
    }
    
    public function setTipoDomicilio($tipo_domicilio)
    {
        $this->container['tipo_domicilio'] = $tipo_domicilio;
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

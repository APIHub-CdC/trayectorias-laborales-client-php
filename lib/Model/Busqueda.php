<?php

namespace tl\mx\Client\Model;

use \ArrayAccess;
use \tl\mx\Client\ObjectSerializer;

class Busqueda implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $tlModelName = 'Busqueda';
    
    protected static $tlTypes = [
        'clave_empresa_consulta' => 'string',
        'folio_consulta_empleador' => 'string',
        'producto_requerido' => 'float',
        'puesto_solicitado' => 'string',
        'persona' => '\tl\mx\Client\Model\PersonaConsulta',
        'domicilio' => '\tl\mx\Client\Model\DomicilioConsulta'
    ];
    
    protected static $tlFormats = [
        'clave_empresa_consulta' => null,
        'folio_consulta_empleador' => null,
        'producto_requerido' => null,
        'puesto_solicitado' => null,
        'persona' => null,
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
        'clave_empresa_consulta' => 'claveEmpresaConsulta',
        'folio_consulta_empleador' => 'folioConsultaEmpleador',
        'producto_requerido' => 'productoRequerido',
        'puesto_solicitado' => 'puestoSolicitado',
        'persona' => 'persona',
        'domicilio' => 'domicilio'
    ];
    
    protected static $setters = [
        'clave_empresa_consulta' => 'setClaveEmpresaConsulta',
        'folio_consulta_empleador' => 'setFolioConsultaEmpleador',
        'producto_requerido' => 'setProductoRequerido',
        'puesto_solicitado' => 'setPuestoSolicitado',
        'persona' => 'setPersona',
        'domicilio' => 'setDomicilio'
    ];
    
    protected static $getters = [
        'clave_empresa_consulta' => 'getClaveEmpresaConsulta',
        'folio_consulta_empleador' => 'getFolioConsultaEmpleador',
        'producto_requerido' => 'getProductoRequerido',
        'puesto_solicitado' => 'getPuestoSolicitado',
        'persona' => 'getPersona',
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
        $this->container['clave_empresa_consulta'] = isset($data['clave_empresa_consulta']) ? $data['clave_empresa_consulta'] : null;
        $this->container['folio_consulta_empleador'] = isset($data['folio_consulta_empleador']) ? $data['folio_consulta_empleador'] : null;
        $this->container['producto_requerido'] = isset($data['producto_requerido']) ? $data['producto_requerido'] : null;
        $this->container['puesto_solicitado'] = isset($data['puesto_solicitado']) ? $data['puesto_solicitado'] : null;
        $this->container['persona'] = isset($data['persona']) ? $data['persona'] : null;
        $this->container['domicilio'] = isset($data['domicilio']) ? $data['domicilio'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clave_empresa_consulta'] === null) {
            $invalidProperties[] = "'clave_empresa_consulta' can't be null";
        }
        if ($this->container['producto_requerido'] === null) {
            $invalidProperties[] = "'producto_requerido' can't be null";
        }
        if ($this->container['puesto_solicitado'] === null) {
            $invalidProperties[] = "'puesto_solicitado' can't be null";
        }
        if ($this->container['persona'] === null) {
            $invalidProperties[] = "'persona' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getClaveEmpresaConsulta()
    {
        return $this->container['clave_empresa_consulta'];
    }
    
    public function setClaveEmpresaConsulta($clave_empresa_consulta)
    {
        $this->container['clave_empresa_consulta'] = $clave_empresa_consulta;
        return $this;
    }
    
    public function getFolioConsultaEmpleador()
    {
        return $this->container['folio_consulta_empleador'];
    }
    
    public function setFolioConsultaEmpleador($folio_consulta_empleador)
    {
        $this->container['folio_consulta_empleador'] = $folio_consulta_empleador;
        return $this;
    }
    
    public function getProductoRequerido()
    {
        return $this->container['producto_requerido'];
    }
    
    public function setProductoRequerido($producto_requerido)
    {
        $this->container['producto_requerido'] = $producto_requerido;
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
    
    public function getPersona()
    {
        return $this->container['persona'];
    }
    
    public function setPersona($persona)
    {
        $this->container['persona'] = $persona;
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

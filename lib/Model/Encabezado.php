<?php

namespace tl\mx\Client\Model;

use \ArrayAccess;
use \tl\mx\Client\ObjectSerializer;

class Encabezado implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $tlModelName = 'Encabezado';
    
    protected static $tlTypes = [
        'clave_empresa_consulta' => 'string',
        'folio_consulta_empleador' => 'string',
        'expediente_encontrado' => 'float',
        'folio_consulta' => 'string',
        'producto_requerido' => 'float',
        'fecha_emision' => 'string'
    ];
    
    protected static $tlFormats = [
        'clave_empresa_consulta' => null,
        'folio_consulta_empleador' => null,
        'expediente_encontrado' => null,
        'folio_consulta' => null,
        'producto_requerido' => null,
        'fecha_emision' => null
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
        'expediente_encontrado' => 'expedienteEncontrado',
        'folio_consulta' => 'folioConsulta',
        'producto_requerido' => 'productoRequerido',
        'fecha_emision' => 'fechaEmision'
    ];
    
    protected static $setters = [
        'clave_empresa_consulta' => 'setClaveEmpresaConsulta',
        'folio_consulta_empleador' => 'setFolioConsultaEmpleador',
        'expediente_encontrado' => 'setExpedienteEncontrado',
        'folio_consulta' => 'setFolioConsulta',
        'producto_requerido' => 'setProductoRequerido',
        'fecha_emision' => 'setFechaEmision'
    ];
    
    protected static $getters = [
        'clave_empresa_consulta' => 'getClaveEmpresaConsulta',
        'folio_consulta_empleador' => 'getFolioConsultaEmpleador',
        'expediente_encontrado' => 'getExpedienteEncontrado',
        'folio_consulta' => 'getFolioConsulta',
        'producto_requerido' => 'getProductoRequerido',
        'fecha_emision' => 'getFechaEmision'
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
        $this->container['expediente_encontrado'] = isset($data['expediente_encontrado']) ? $data['expediente_encontrado'] : null;
        $this->container['folio_consulta'] = isset($data['folio_consulta']) ? $data['folio_consulta'] : null;
        $this->container['producto_requerido'] = isset($data['producto_requerido']) ? $data['producto_requerido'] : null;
        $this->container['fecha_emision'] = isset($data['fecha_emision']) ? $data['fecha_emision'] : null;
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
    
    public function getExpedienteEncontrado()
    {
        return $this->container['expediente_encontrado'];
    }
    
    public function setExpedienteEncontrado($expediente_encontrado)
    {
        $this->container['expediente_encontrado'] = $expediente_encontrado;
        return $this;
    }
    
    public function getFolioConsulta()
    {
        return $this->container['folio_consulta'];
    }
    
    public function setFolioConsulta($folio_consulta)
    {
        $this->container['folio_consulta'] = $folio_consulta;
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
    
    public function getFechaEmision()
    {
        return $this->container['fecha_emision'];
    }
    
    public function setFechaEmision($fecha_emision)
    {
        $this->container['fecha_emision'] = $fecha_emision;
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

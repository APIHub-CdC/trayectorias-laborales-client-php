<?php

namespace tl\mx\Client\Model;

use \ArrayAccess;
use \tl\mx\Client\ObjectSerializer;

class Empleo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $tlModelName = 'Empleo';
    
    protected static $tlTypes = [
        'referencia_empresa' => 'float',
        'tipo_negocio_empresa' => 'string',
        'fecha_contratacion' => 'string',
        'fecha_salida' => 'string',
        'puesto' => 'string',
        'ultimo_salario' => 'float',
        'periodo_pago' => '\tl\mx\Client\Model\CatalogoPeriodoPago',
        'clave_moneda' => '\tl\mx\Client\Model\CatalogoClaveMoneda',
        'domicilio' => '\tl\mx\Client\Model\Domicilio',
        'observaciones' => '\tl\mx\Client\Model\CatalogoObservaciones'
    ];
    
    protected static $tlFormats = [
        'referencia_empresa' => null,
        'tipo_negocio_empresa' => null,
        'fecha_contratacion' => null,
        'fecha_salida' => null,
        'puesto' => null,
        'ultimo_salario' => null,
        'periodo_pago' => null,
        'clave_moneda' => null,
        'domicilio' => null,
        'observaciones' => null
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
        'referencia_empresa' => 'referenciaEmpresa',
        'tipo_negocio_empresa' => 'tipoNegocioEmpresa',
        'fecha_contratacion' => 'fechaContratacion',
        'fecha_salida' => 'fechaSalida',
        'puesto' => 'puesto',
        'ultimo_salario' => 'ultimoSalario',
        'periodo_pago' => 'periodoPago',
        'clave_moneda' => 'claveMoneda',
        'domicilio' => 'domicilio',
        'observaciones' => 'observaciones'
    ];
    
    protected static $setters = [
        'referencia_empresa' => 'setReferenciaEmpresa',
        'tipo_negocio_empresa' => 'setTipoNegocioEmpresa',
        'fecha_contratacion' => 'setFechaContratacion',
        'fecha_salida' => 'setFechaSalida',
        'puesto' => 'setPuesto',
        'ultimo_salario' => 'setUltimoSalario',
        'periodo_pago' => 'setPeriodoPago',
        'clave_moneda' => 'setClaveMoneda',
        'domicilio' => 'setDomicilio',
        'observaciones' => 'setObservaciones'
    ];
    
    protected static $getters = [
        'referencia_empresa' => 'getReferenciaEmpresa',
        'tipo_negocio_empresa' => 'getTipoNegocioEmpresa',
        'fecha_contratacion' => 'getFechaContratacion',
        'fecha_salida' => 'getFechaSalida',
        'puesto' => 'getPuesto',
        'ultimo_salario' => 'getUltimoSalario',
        'periodo_pago' => 'getPeriodoPago',
        'clave_moneda' => 'getClaveMoneda',
        'domicilio' => 'getDomicilio',
        'observaciones' => 'getObservaciones'
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
        $this->container['referencia_empresa'] = isset($data['referencia_empresa']) ? $data['referencia_empresa'] : null;
        $this->container['tipo_negocio_empresa'] = isset($data['tipo_negocio_empresa']) ? $data['tipo_negocio_empresa'] : null;
        $this->container['fecha_contratacion'] = isset($data['fecha_contratacion']) ? $data['fecha_contratacion'] : null;
        $this->container['fecha_salida'] = isset($data['fecha_salida']) ? $data['fecha_salida'] : null;
        $this->container['puesto'] = isset($data['puesto']) ? $data['puesto'] : null;
        $this->container['ultimo_salario'] = isset($data['ultimo_salario']) ? $data['ultimo_salario'] : null;
        $this->container['periodo_pago'] = isset($data['periodo_pago']) ? $data['periodo_pago'] : null;
        $this->container['clave_moneda'] = isset($data['clave_moneda']) ? $data['clave_moneda'] : null;
        $this->container['domicilio'] = isset($data['domicilio']) ? $data['domicilio'] : null;
        $this->container['observaciones'] = isset($data['observaciones']) ? $data['observaciones'] : null;
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
    
    public function getReferenciaEmpresa()
    {
        return $this->container['referencia_empresa'];
    }
    
    public function setReferenciaEmpresa($referencia_empresa)
    {
        $this->container['referencia_empresa'] = $referencia_empresa;
        return $this;
    }
    
    public function getTipoNegocioEmpresa()
    {
        return $this->container['tipo_negocio_empresa'];
    }
    
    public function setTipoNegocioEmpresa($tipo_negocio_empresa)
    {
        $this->container['tipo_negocio_empresa'] = $tipo_negocio_empresa;
        return $this;
    }
    
    public function getFechaContratacion()
    {
        return $this->container['fecha_contratacion'];
    }
    
    public function setFechaContratacion($fecha_contratacion)
    {
        $this->container['fecha_contratacion'] = $fecha_contratacion;
        return $this;
    }
    
    public function getFechaSalida()
    {
        return $this->container['fecha_salida'];
    }
    
    public function setFechaSalida($fecha_salida)
    {
        $this->container['fecha_salida'] = $fecha_salida;
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
    
    public function getUltimoSalario()
    {
        return $this->container['ultimo_salario'];
    }
    
    public function setUltimoSalario($ultimo_salario)
    {
        $this->container['ultimo_salario'] = $ultimo_salario;
        return $this;
    }
    
    public function getPeriodoPago()
    {
        return $this->container['periodo_pago'];
    }
    
    public function setPeriodoPago($periodo_pago)
    {
        $this->container['periodo_pago'] = $periodo_pago;
        return $this;
    }
    
    public function getClaveMoneda()
    {
        return $this->container['clave_moneda'];
    }
    
    public function setClaveMoneda($clave_moneda)
    {
        $this->container['clave_moneda'] = $clave_moneda;
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
    
    public function getObservaciones()
    {
        return $this->container['observaciones'];
    }
    
    public function setObservaciones($observaciones)
    {
        $this->container['observaciones'] = $observaciones;
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

<?php

namespace tl\mx\Client\Model;

interface ModelInterface
{
    
    public function getModelName();
    
    public static function tlTypes();
    
    public static function tlFormats();
    
    public static function attributeMap();
    
    public static function setters();
    
    public static function getters();
    
    public function listInvalidProperties();
    
    public function valid();
}

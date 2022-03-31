<?php

namespace douggonsouza\propertys;

use stdClass;
use douggonsouza\propertys\propertysInterface;

class propertys extends stdClass implements propertysInterface
{
    /**
     * Evento construtor da classe
     *
     * @param array $propertys
     * 
     */
    public function __construct(array $propertys)
    {
        foreach($propertys as $name => $value){
            if(isset($value) && !empty($value)){
                $this->$name = $value;
            }
        }
    }

    /**
     * Adiciona propriedades
     *
     * @param array $propertys
     * 
     * @return self
     * 
     */
    public function add(array $propertys)
    {
        foreach($propertys as $name => $value){
            if(isset($value) && !empty($value)){
                $this->$name = $value;
            }
        }

        return $this;
    }

    /**
     * Deleta propriedade
     *
     * @param string $property
     * 
     * @return self
     * 
     */
    public function del(string $property)
    {
        unset($this->$property);

        return $this;
    }

    /**
     * Sobrecarga do método mágico __set
     *
     * @param string $name
     * @param mixed $value
     * 
     */
    public function __set(string $name, mixed $value)
    {
        if(isset($value) && !empty($value)){
            $this->$name = $value;
        }
    }

    /**
     * Exporta classe como array
     *
     * @return array
     * 
     */
    public function toArray()
    {
        return (array) $this;
    }

    /**
     * Exporta classe como serialize
     *
     * @return string
     * 
     */
    public function toSerializabe()
    {
        return serialize($this);
    }
}
?>
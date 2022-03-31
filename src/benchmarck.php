<?php

namespace douggonsouza\benchmarck;

use douggonsouza\benchmarck\benchmarckInterface;
use douggonsouza\propertys\propertysInterface;

abstract class benchmarck implements benchmarckInterface
{
    protected static $behavior;
    
    public static function benchmarck(benchmarckInterface $behavior)
    {
        self::setBehavior($behavior);
    }

    /**
     * Executa o comportamento
     *
     * @param propertysInterface|null $propertys
     * 
     * @return void
     * 
     */
    public function behavior(propertysInterface $propertys = null)
    {
        self::getBehavior()->behavior($propertys);
    }

    /**
     * Get the value of behavior
     */ 
    public static function getBehavior()
    {
        return self::$behavior;
    }

    /**
     * Set the value of behavior
     *
     * @return  self
     */ 
    protected function setBehavior(benchmarckInterface $behavior)
    {
        if(isset($behavior) && !empty($behavior)){
            self::$behavior = $behavior;
        }

        return $this;
    }
}
?>
<?php

namespace douggonsouza\benchmarck;

use douggonsouza\benchmarck\benchmarckInterface;
use douggonsouza\propertys\propertysInterface;

class block implements benchmarckInterface
{
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

    }
}
?>
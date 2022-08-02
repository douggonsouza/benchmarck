<?php

namespace douggonsouza\benchmarck;

use douggonsouza\benchmarck\behaviorInterface;

class identify implements behaviorInterface
{
    protected static $config = array();

    /**
     * Executa o comportamento
     *
     * @param string|null $script
     * 
     * @return void
     * 
     */
    public function behavior(string $identity = null)
    {
        $dir = '';
        if(isset($identity) && !empty($identity)){
            $dir = $this->local($identity);
        }
        if(!file_exists($dir)){
            throw new \Exception("Arquivo não encontrado.");
        }

        return $dir;
    }

    /** 
     * Adiciona controller ou local ao identificador do template
     * 
     * @param string $identify
     * @param string $controller
     * @param string $local
     * 
     * @return bool
     */
    public static function add(string $identify, string $controller = null, string $local = null)
    {
        return self::setConfig($identify, $controller, $local);
    }

    /** 
     * Devolve o local para do identificador
     * 
     * @param string $identify
     * 
     * @return string|null
     */
    public function local(string $identify)
    {
        $config = $this->getConfig()[$identify];
        if(isset($config) && !empty($config)){
            return $config['local'];
        }
        return null;
    }

    /** 
     * Devolve o controller para do identificador
     * 
     * @param string $identify
     * 
     * @return string|null
     */
    public function controller(string $identify)
    {
        $config = $this->getConfig()[$identify];
        if(isset($config) && !empty($config)){
            return $config['controller'];
        }
        return null;
    }

    /**
     * Get the value of config
     */ 
    public static function getConfig()
    {
        return self::$config;
    }

    /**
     * Set the value of config
     *
     * @return  bool
     */ 
    public static function setConfig($identify, string $controller = null, string $local = null)
    {
        if(!isset($identify) || empty($identify)){
            return false;
        }

        $config = self::getConfig();

        if(isset($config[$identify]) && !empty($config[$identify])){
            $config = array(
                'local' => __DIR__ . $local,
                'controller' => $controller
            );
            return true;
        }

        self::$config[$identify] = array(
            'local' => __DIR__ . $local,
            'controller' => $controller
        );

        return true;
    }
}
?>
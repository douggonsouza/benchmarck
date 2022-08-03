<?php

namespace douggonsouza\benchmarck;

use douggonsouza\benchmarck\behaviorInterface;
use douggonsouza\benchmarck\assets\assets;
use douggonsouza\benchmarck\blocks\blocks;
use douggonsouza\benchmarck\layouts\layouts;
use douggonsouza\benchmarck\identify;
use douggonsouza\language\languageInterface;

final class benchmarck
{
    protected static $behavior;
    protected static $identify;
    protected $language;

    public function __construct(languageInterface $language)
    {
        $this->setLanguage($language);
    }

    /**
     * Implementa comportamento assets
     *
     * @param string|null $script
     * 
     * @return string
     * 
     */
    public function assets(string $script = null, string $type = assets::ABSOLUTE_DIR)
    {
        self::setBehavior(new assets());
        return self::getBehavior()->setType($type)->behavior($script);
    }

    /**
     * Implementa comportamento blocks
     *
     * @param string|null $script
     * 
     * @return string
     * 
     */
    public function blocks(string $script = null)
    {
        self::setBehavior(new blocks());
        return self::getBehavior()->behavior($script);
    }

    /**
     * Implementa comportamento layouts
     *
     * @param string|null $script
     * 
     * @return string
     * 
     */
    public function layouts(string $script = null)
    {
        self::setBehavior(new layouts());
        return self::getBehavior()->behavior($script);
    }

    /**
     * Implementa comportamento de template identificado
     *
     * @param string|null       $identify
     * @param behaviorInterface $newIdentify
     * 
     * @return string
     * 
     */
    public function identified(string $identify)
    {
        if(!isset($identify) && !empty($identify)){
            throw new \Exception("O parâmetro Identify e o Config são obrigatórios.");
        }

        $this->setBehavior(self::getIdentify());        
        return $this->getBehavior()->behavior($identify);
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
    public function setBehavior(behaviorInterface $behavior)
    {
        if(isset($behavior) && !empty($behavior)){
            self::$behavior = $behavior;
        }

        return $this;
    }

    /**
     * Get the value of identify
     */ 
    public static function getIdentify()
    {
        return self::$identify;
    }

    /**
     * Set the value of identify
     *
     * @return  self
     */ 
    public static function setIdentify(behaviorInterface $identify)
    {
        if(isset($identify) && !empty($identify)){
            self::$identify = $identify;
        }        

        return;
    }

    /**
     * Get the value of language
     */ 
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set the value of language
     *
     * @return  self
     */ 
    public function setLanguage(languageInterface $language)
    {
        if(isset($language) && !empty($language)){
            $this->language = $language;
        }

        return $this;
    }
}
?>
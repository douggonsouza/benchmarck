<?php

namespace douggonsouza\benchmarck;

use douggonsouza\benchmarck\behaviorInterface;
use douggonsouza\benchmarck\assets\assets;
use douggonsouza\benchmarck\blocks\blocks;
use douggonsouza\benchmarck\layouts\layouts;

final class benchmarck
{
    protected static $behavior;

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
}
?>
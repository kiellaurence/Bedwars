<?php

namespace bedwars;

use bedwars\arena\ArenaManager;
use bedwars\commands\BWCommand;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;

class Loader extends PluginBase
{
    //instancia de la class Loader
    public static $instance;
    public $manager;
    
    public function onEnable(): void
    {
        self::$instance = $this;
        $this->getLogger()->info("§l§b» bedwars by TheBlitzCode");               
        $this->manager = new ArenaManager($this);
       
        $this->getServer()->getCommandMap()->register("/bedwars", new BWCommand($this));            
    }
    
    public static function getInstance()
    {
        return self::$instance;
    }
}

?>
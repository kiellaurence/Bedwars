<?php

namespace bedwars\utils;

class Utils
{
    
    //function que cargara las arenas registradas
    public static function loadWorlds()
    {
        foreach (glob(Loader::getInstance() . "/arenas/" . "*.yml") as $file) {
            $data = new Config($file, Config::YAML);
            $config = $data->getAll();
            $type = $config["type"];
            $arena = basename($file, ".yml");
            Loader::getInstance()->manager->addArena($arena, $config, $type);
        }                 
    }
    
    //esta function guardara las arena
    //bueno, creo que esto ya seria todo por hoy xd, ya me canse
    public static function saveWorlds()
    {
        foreach (Loader::getInstance()->manager->getArenas() as $world => $class) {
            $config = new Config(Loader::getInstance() . "/arenas/" . "{$arena}.yml", Config::YAML);
            $config->setAll($class->getConfig());
        }
    }
    
    public static function getUniqueID($l = 8)
    {
        $better_token = md5(uniqid(rand(), true));
        $rem = strlen($better_token)-$l;
        $unique_code = substr($better_token, 0, -$rem);
        $uniqueid = $unique_code;
        return $uniqueid;
    }
    
    public static function getPrefix(): String
    {
        return "§l§cBed§fWars §7»§r ";
    }
}

?>
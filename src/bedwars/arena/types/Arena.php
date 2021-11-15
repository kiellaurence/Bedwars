<?php

namespace bedwars\arena\type;

use bedwars\arena\type\Type;

class Arena
{
    private $name = "";
    private $type = Type::SOLO;
    private $config;
    
    public function __construct(string $name, array $config = [])     
    {
        $this->name = $name;
        $this->config = (count($config) !== 0) ? $this->loadConfig($config) : $this->defaultConfig();   
    }
    
    public function getName(): String
    {
        return $this->name;
    }
    
    public function getType(): Int
    {
        return $this->type;
    }
    
    public function getConfig(): Arry
    {
        return $this->Config;
    }
    
    public function getSlots(): Int
    {
        return $this->config["slots"];
    }
    
    public function getMinSlots(): Int
    {
        return $this->config["min-slots"];
    }
    
    public function getMaxSlots(): Int
    {
        return $this->config["max-slots"];
    }
    
    public function getMinTime(): Int
    {
        return $this->config["min-time"];
    }
    
    public function getMaxTime(): Int
    {
        return $this->config["max-time"];
    }
    
    public function getLobbySpawn(): Array 
    {
        return $this->config["waiting-spawn"];
    }
    
    public function getDeathSpawn(): Array
    {
        return $this->config["death-spawn"];
    }
    
    public function setSlots(int $slots)
    {
        $this->config["slots"] = $slots;
    }
    
    public function setMinSlots(int $slots)
    {
        $this->config["min-slots"] = $slots;
    }
    
    public function setMaxSlots(int $slots)
    {
        $this->config["max-slots"] = $slots;
    }
    
    public function setLobbySpawn(string $world, array $spawn): Array 
    {
        $this->config["waiting-spawn"][$world] = $spawn;
    }
    
    public function setDeathSpawn(string $world, array $spawn): Array 
    {
        $this->config["death-spawn"][$world] = $spawn;
    }
    public function setType(Int $type)
    {
        $this->type = $type;
    }
    
    public function loadConfig(array $config): Array
    {
        $this->setType($config["type"]);
        return $config;
    }
    
    public function defaultConfig(): Array
    {
        return [
                "name" => $this->name,
                "type" => null,
                "slots" => null,
                "min-slots" => null,
                "max-slots" => null,
                "min-time" => null,
                "mmax-time" => null,
                "spawns" => null,
                "waiting-spawn" => null,
                "death-spawn" => null
            ];
    }
}
<?php

namespace bedwars\arena\type;

use bedwars\arena\type\Type;
use bedwars\arena\type\Arena;

class ArenaSolo extends Arena
{
    private $type = Type::SOLO;
    
    public function __construct(string $name, array $config = [])
    {
        parent::__construct($name, $config);
    }
    
    public function getSpawn(int $slot): Array
    {
        return $this->config["spawns"][$slot];
    }
    
    public function setSpawn(int $slot, array $spawn)
    {
        $this->config["spawns"][$slot] = $spawn;
    }
}

?>
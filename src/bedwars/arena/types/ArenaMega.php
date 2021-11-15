<?php

namespace bedwars\arena\type;

use bedwars\arena\type\Type;
use bedwars\arena\type\Arena;

class ArenaMega extends Arena
{
    private $type = Type::MEGA;
    
    public function __construct(string $name, array $config = [])
    {
        parent::__construct($name, $config);
    }
    
    public function getTeamSpawn(string $team, int $slot): Array
    {
        return $this->config["spawns"][$slot];
    }
    
    public function setTeamSpawn(string $team, int $slot, array $spawn)
    {
        $this->config["spawns"][$team][$slot] = $spawn;
    }
}

?>
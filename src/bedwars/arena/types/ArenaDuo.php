<?php

namespace bedwars\arena\type;

use bedwars\arena\type\Type;
use bedwars\arena\type\Arena;

class ArenaDuo extends Arena
{
    private $type = Type::DUO;
    
    public function __construct(string $name, array $config = [])
    {
        parent::__construct($name, $config);
    }
    
    public function getTeamSpawn(int $team): Array
    {
        return $this->config["spawns"][$team];
    }
    
    public function setTeamSpawn(int $team, array $spawn)
    {
        $this->config["spawns"][$team] = $spawn;
    }
}

?>
<?php

namespace bedwars\arena\type;

use bedwars\arena\type\Type;
use bedwars\arena\type\Arena;

class ArenaTeam extends Arena
{
    private $type = Type::TEAM;
    
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
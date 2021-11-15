<?php

namespace bedwars\arena;

use bedwars\Loader;
use bedwars\arena\Arena;
use bedwars\arena\type\ArenaSolo;
use bedwars\arena\type\ArenaDuo;
use bedwars\arena\type\ArenaTeam;
use bedwars\arena\type\ArenaMega;

class ArenaManager
{
    
    public $arenas = [];
    
    public function __construct(Loader $main)
    {
        $this->main = $main;
    }
    
    
    public function addArena(string $arena, array $config, int $type)
    {
        switch ($type) {
            case Type::SOLO:
                $this->arenas[$arena] = new ArenaSolo($arena, $config);
                break;
            case Type::DUO:
                $this->arenas[$arena] = new ArenaDuo($arena, $config);
                break;
            case Type::TEAM:
                $this->arenas[$arena] = new ArenaSquad($arena, $config);
                break;
            case Type::MEGA:
                $this->arenas[$arena] = new ArenaSolo($arena, $config);
                break;
        }
    }
    
    public function getArenas(): Array
    {
        return $this->arenas;
    }
    
    public function getArenaByName(string $name) 
    {
        return $this->arenas[$arena] ?? null;
    }
    
    public function removeArena(string $arena)
    {
        unset($this->arenas[$arena]);
    }
    
}

?>
<?php

namespace bedwars\arena;

use bedwars\arena\ArenaManager;

class ArenaCreator
{
    public ArenaManager $manager;
    public $creators = [];
    
    public function __construct(ArenaManager $manager)
    {
        $this->manager = $manager;
    }
    
    public function getCreators(): Array
    {
        return $this->creators;
    }
    
    public function isCreator(string $name): bool
    {
       return isset($this->creators[$name]);
    }

    public function setCreator(string $player, string $arena)
    {
        $this->creators[$player] = $this->ArenaManager->getArenaByName($arena);
    }
    
    public function removeCreator(string $player)
    {
        unset($this->creators[$player]);
    }
}

?>
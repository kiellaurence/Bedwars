<?php

namespace bedwars\queue;

use bedwars\queue\QueueManager;
use bedwars\arena\Status;
use bedwars\arena\ArenaManager;
use bedwars\event\player\queue\PlayerJoinQueue;
use bedwars\event\player\queue\PlayerQuitQueue;
use pocketmine\player\Player;

class Queue
{
   
    public QueueManager $manager;
    private $type = "";
    private $id;
    private Array $players = [];
   
    public function __construct(QueueManager $manager, int $id, int $type)               
    {
       $this->manager = $manager;
       $this->id = $id;
       $this->type = $type;
    }
    
    public function getID(): int 
    {
        return $this->id;
    }
    
    public function getType(): string 
    {
        return $this->string;
    }
    
    public function getStatus(): Int 
    {
        return $this->status;
    }
    
    public function getPlayers(): Array
    {
        return $this->players;
    }
    
    public function getPlayerByName(string $player): Player
    {
        return $this->players[$player];
    }
    
    public function setPlayer(Player $player) 
    {
        $event = new PlayerJoinQueue($player, $this);
        $event->call();
        
        if (!$event->isCancelled()) {
            $this->players[$player->getName()] = $player;
        }
    }
    
    public function removePlayer(Player $player) 
    {
        $event = new PlayerQuitQueue($player, $this);
        $event->call();
        
        if (!$event->isCancelled()) {
            unset($this->players[$player->getName()]);
        }
    }
    
    public function setStatus(int $status)
    {
        $this->status = $status;
    }
}

?>
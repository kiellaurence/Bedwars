<?php

namespace bedwars\event;

use bedwars\event\BedWarsEvent;
use bedwars\queue\Queue;
use pocketmine\player\Player;

class BWPlayerJoinEvent extends BedWarsEvent
{
    
    public function __construct(Player $player, Queue $queue)
    {
        $this->player = $player;
        $this->queue = $queue;
    }
    
}

?>
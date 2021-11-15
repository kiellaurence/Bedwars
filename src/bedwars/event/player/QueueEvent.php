<?php

namespace bedwars\event;

use bedwars\event\BedWarsEvent;
use bedwars\queue\Queue;
use pocketmine\player\Player;

//esta class sera un evento que se llamara cuando el jugador entra o sale de una partida
//esto mas que nada es para los otros desarolladores que utilizen el plugin puedan escalaro
xd
class QueueEvent extends BedWarsEvent
{
    
    public function __construct(Player $player, Queue $queue)
    {
        $this->player = $player;
        $this->queue = $queue;
    }
    
}

?>
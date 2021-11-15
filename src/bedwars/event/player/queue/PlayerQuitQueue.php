<?php

namespace bedwars\event\player\queue;
//evento que se invocara cuando el jugador salga de la partida

use bedwars\event\player\queue\QueueEvent;


class PlayerQuitQueue extends QueueEvent //dicha class sera hija del QueueEvent
{
    
    public Queue $queue;//variable que almacenará la sala
    public Player $player;//jugador

    public function __construct(Player $player, Queue $queue)
    {
        $this->player = $player;
        $this->queue = $queue;
    }
    
    public function getPlayer(): Player
    {
        //esto devolverá el jugador (variable)
        return $this->player;
    }
    
    public function getQueue(): Queue
    {
        //esto devolverá la sala(variable)
        return $this->queue;
    }
    
    
    
}


?>
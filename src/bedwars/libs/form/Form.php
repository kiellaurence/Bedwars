<?php

namespace bedwars\libs\form;

use pocketmine\form\Form as PMForm;
use pocketmine\player\Player;

abstract class Form implements PMForm
{
    protected $data;
    private $callable;
    
    public function __construct(callable $callable)
    {
        $this->callable = $callable;
    }
    
    public function getCallable()
    {
        return $this->callable;
    }
    
    public function setCallable(?callable $callable)
    {
        $this->callable = $callable;
    }
    
    public function processData(&$data): void
    {
        
    }
    
    public function jsonSerialize()
    {
        return $this->data;
    }
    
    public function sendToPlayer(Player $player)
    {
        $player->sendForm($this);
    }
    
    public function handleResponse(Player $player, $data): void
    {
        $this->processData($data);
        $callable = $this->getCallable();
        
        if ($callable !== null) {
            $callable($player, $data);
        }
    }
    
}

?>
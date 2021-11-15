<?php

namespace bedwars\queue;

class QueueManager
{

    private $queues = [];
    private $playingQueues = [];
    public Loader $main;
    public ArenaManager $manager;
    
    public function __construct(Loader $main, ArenaManager $manager)          
    {
        $this->main = $main;
        $this->manager = $manager;
    }
    
    public function createQueue(string $type = "solo") 
    {
        $id = Utils::getUniqueID(5); // 5 digit random number

        if (isset($this->queues[$id])) {
            $this->createQueue();
        } else {
            $this->queues["{$id}"] = new Queue($this, $id, $type);
            return "{$id}";
        }
    }
   
    public function getQueues(): Array
    {
        return $this->queues;
    }
    
    public function getQueueById(string $id): Queue
    {
        return $this->queues[$id];
    }
    
    public function removeQueue(string $id)
    {
        unset($this->queues[$id]);
    }
}

?>
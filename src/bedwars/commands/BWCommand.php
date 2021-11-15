<?php

namespace bedwars\commands;

use bedwars\Loader;
use bedwars\utils\Utils;
use bedwars\libs\form\SimpleForm;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class BWCommand extends Command {
	
	private $plugin;
	
	public function __construct(Loader $plugin) {
		parent::__construct("bedwars", "Minigame BedWars", "/bedwars help", ["bw", "BW", "BedWars", "BEDWARS"]);            
		$this->plugin = $plugin;
	}
	
	public function execute(CommandSender $player, string $label, array $args)
	{
		if (!$player instanceof Player) {
		    $this->plugin->getLogger()->info(Utils::getPrefix() . "§4utiliza el commando en el juego");
		    return;
		}
		
		if (!isset($args[0])) {
		    $player->sendMessage(Utils::getPrefix() . "§4utiliza /bedwars help");
		    return;
		}
		
		switch ($args[0]) {
		    case 'menu':
		        
		        break;
	        case 'help':
	            // code...
	            break;
		}
	}
	
}

?>
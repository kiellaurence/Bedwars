<?php

namespace bedwars\api;

use bedwars\libs\form\SimpleForm;
use bedwars\libs\form\CustomForm;

class MenuApi
{
    public static function getMenu(Player $player)
    {
        $form = new SimpleForm(function (Player $player, $data)
            {
                if ($data === null) return;

                switch ($data) {
                    case 0:
                        $player->sendMessage(Utils::getPrefix() . "§apulsaste el boton :D !");         
                        break;
                    case 1:
                        $player->sendMessage(Utils::getPrefix() . "§apulsaste el boton :D !");         
                        break;
                    case 2:
                        $player->sendMessage(Utils::getPrefix() . "§apulsaste el boton :D !");         
                        break;
                    case 3:
                        $player->sendMessage(Utils::getPrefix() . "§apulsaste el boton :D !");         
                        break;
                    case 4:
                        $player->sendMessage(Utils::getPrefix() . "§apulsaste el boton :D !");         
                        break;
                }
            }
        );
        
        $form->setTitle("§l§cBed§fWars");
        $form->setContent("§fMinigame BedWars menu");
        $form->addButton("§l§7» §8Create §7«" . "\n" . "§l§7 create a new world ");
        $form->addButton("§l§7» §8Join §7«" . "\n" . "§l§7 click to play ");
        $form->addButton("§l§7» §8Edit §7«" . "\n" . "§l§7 edit world ");
        $form->addButton("§l§7» §8Settings §7«" . "\n" . "§l§7 game settings ");
        $form->addButton("§l§7» §8Worlds §7«" . "\n" . "§l§7 worlds list ");
        $form->sendToPlayer($player);
    }
    
    public static function getSettingsUI(Player $player)
    {
        
    }

    public static function removeWorldUI(Player $player)
    {
        
    }
    
    public static function editWorldUI($arena)
    {
        
    }
}

?>
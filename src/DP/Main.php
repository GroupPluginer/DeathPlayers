<?php

namespace DP;

use pocketmine\plugin\PluginBase;
use pocketmine\event\PlayerDeathEvent;
use pocketmine\text\TextFormat as Color;
use pocketmine\event\Listener:

 class Main extends PluginBase implements Listener{
 
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
       }
        
        public function onDeath(PlayerDeathEvent $event){
         $player = $event->getPlayer();
         $name = $player->getName();
         
         $player->setDeathMessage(Color::RED."$name ");
        } 
       }

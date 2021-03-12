<?php

namespace TwojeIP_Alert;

use pocketmine\plugin\PluginBase;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;

class Main extends PluginBase{
	
	public function onEnable(){
		$this->getLogger()->info("[TwojeIP] Plugin Włączono");
	}
	public function onDisable(){
		$this->getLogger()->info("[TwojeIP]Plugin Wyłączono");
	}
	  public function onCommand(CommandSender $sender, Command $cmd, String $label, array $args) : bool {
	 if($cmd->getName() == "alert"){
	 if($sender->hasPermission("alert.command")){
	 		$wiadomosc = trim(implode(" ", $args));
	 		foreach($this->getServer()->getOnlinePlayers() as $p){
	 			$p->addTitle("§lTwojeIP", "§l§7$wiadomosc", 0, 20*2, 0);
	 		}
	 	}
	 }
	 return false;
	 }
	}

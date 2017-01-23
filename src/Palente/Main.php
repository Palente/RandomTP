<?php
namespace Main;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\level\Level;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
class Main extends PluginBase{
	public function onLoad() {
		self::$logger = $this->getLogger();
		self::$logger->info('Je charge #RTP');
	}

	public function onEnable() {
		$this->getLogger()->info('Je suis chargé');
	}

public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {
switch(strtolower($cmd->getName())) {
	case 'rtp':
if(!$sender->isOp()) return false;
foreach ($this->plugin->getServer()->getOnlinePlayers() as $player) {
	$x = mt_rand('-300', '5000');
	$y = mt_rand('70', '120');
	$z = mt_rand('-300', '5000');
$player->teleport($x, $y, $z);}		$sender->sendMessage("§4Tout les Joueur on ete Tp a oendroit au hasard"); break;
}
}

public function onDisable() {
	$this->getLogger()->info('[RTP] Disable');
}
}


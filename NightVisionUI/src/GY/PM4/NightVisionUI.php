<?php

declare(strict_types=1);

namespace GY\PM4;

use pocketmine\event\Listener;

use pocketmine\plugin\PluginBase;

use pocketmine\command\{Command, CommandSender};

use pocketmine\player\Player;

use pocketmine\form\Form;

use GY\PM4\form\NTForm;

class NightVisionUI extends PluginBase implements Listener
{
   public function onEnable() : void {
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
   }
   public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool
   {
      if($sender instanceof Player)
      {
         if($command->getName() == "야간투시") {
             $sender->sendForm(new NTForm());
           }
         }
         return true;
      }
}
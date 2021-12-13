<?php

declare(strict_types=1);

namespace GY\PM4\form;

use pocketmine\player\Player;

use pocketmine\form\Form;

use pocketmine\entity\effect\{Effect, EffectInstance, VanillaEffects};

class NTForm implements Form 
{
   public function jsonSerialize() : array {
      return [
      "type" => "form",
      "title" => "GYo.O",
      "content" => "§l§a✔ §f야간투시를 관리합니다.\n\n",
      "buttons" => [
      [
      "text" => "§l§0야간투시 지급\n§f야간투시를 지급받습니다."
            ],
            [
   "text" => "§l§0야간투시 제거\n§f야간투시를 제거합니다."
      ]
         ]
      ];
   }
   public function handleResponse(Player $player, $data) : void {
      if($data === null) {
         return;
      }
      if($data === 0) {
      	$player->getEffects()->add(new EffectInstance(VanillaEffects::NIGHT_VISION(), 999999, 1, false));
         $player->sendMessage("§l§7[ §f야간투시 §7] §f야간투시를 지급받았습니다.");
      }
      if($data === 1) {
         $player->getEffects()->remove(VanillaEffects::NIGHT_VISION());
         $player->sendMessage("§l§7[ §f야간투시 §7] §f야간투시를 제거했습니다.");
      }
   }
 }
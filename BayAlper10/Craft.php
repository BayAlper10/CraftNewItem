<?php

/**
*  ___   _   
* | _ ) /_\  
* | _ \/ _ \
* |___/_/ \_\
* The beginning of progress is to begin.
* @version 1.0
* @author BayAlper10
* @copyright ZCraft Network© | 2014 - 2019
* @license GNU Public License
*/

namespace BayAlper10;

use pocketmine\plugin\PluginBase;
use pocketmine\inventory\ShapedRecipe;
use pocketmine\item\Item;

class Craft extends PluginBase {
	
	/** @var ShapedRecipe */
	public $recipe;
	
	/** onEnable() */
	public function onEnable(): void {
		$this->getServer()->getPluginManager()->registerEvents(new CraftEvent($this), $this);
		$this->registerTestRecipe();
	}
	
	/** @var registerTestRecipe */
	public function registerTestRecipe(): void {
		$this->recipe = new ShapedRecipe(
		[" a ", " x "],
		[
		"a" => Item::get(1,0,1),
		"x" => Item::get(264,0,1)
		],
		[Item::get(4,0,1)->setCustomName("§aTest")]);
		$this->getServer()->getCraftingManager()->registerRecipe($this->recipe);
	}
}

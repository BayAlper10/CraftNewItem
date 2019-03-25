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

use pocketmine\event\inventory\CraftItemEvent;
use pocketmine\event\Listener;

class CraftEvent implements Listener {
	
	/** @var Craft */
	private $plugin;
	
	/**
	* CraftItem construct
	* @param Craft $plugin
	*/
	public function __construct(Craft $plugin) {
		$this->plugin = $plugin;
	}
	
	/**
	* @param CraftItemEvent $event
	*/
	public function onCraft(CraftItemEvent $e) {
		$recipe = $e->getRecipe();
		if(!$recipe == $this->plugin->recipe){
		}
		//cancel event if he doesn't have perm
	}
}
<?php
namespace allowarrow;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\entity\Arrow;
use pocketmine\event\entity\ProjectileHitEvent;

class allowarrow extends PluginBase implements Listener{

	public function onEnable(){ 
		$this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );}
	public function arrow(ProjectileHitEvent  $event){
	$entity =$event->getEntity();
$entity->getLevel()->removeEntity($entity);
	}
}

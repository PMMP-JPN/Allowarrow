<?php
namespace allowarrow;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\entity\Arrow;
use pocketmine\event\entity\ProjectileHitEvent;

class allowarrow extends PluginBase implements Listener{
	public function arrow(ProjectileHitEvent $event){
	$event->getEntity()->getLevel()->removeEntity($entity);
	}
}
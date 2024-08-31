<?php
namespace trix;

use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;

class AntiSwitching implements Listener {
    /**
     * @param EntityDamageByEntityEvent $event
     * @return void
     * @priority HIGHEST
     */
    public function handleNoSwitch(EntityDamageByEntityEvent $event): void {
        if ($event->getModifier(EntityDamageEvent::MODIFIER_PREVIOUS_DAMAGE_COOLDOWN) < 0) {
            $event->setCancelled(true);
        }
    }
}

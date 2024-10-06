# AntiSwitching
```<?php
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
            $ev->cancel();
        }
    }
}
```

# Switcing
Before:
![with_switching](https://github.com/user-attachments/assets/eb1c6964-f81c-4328-acd8-8014b058b749)

After:
![without_switching](https://github.com/user-attachments/assets/32f979ae-1ca1-4f81-8726-d4104451aebc)

If there is a issue with the plugin please create a new issue on the repo and it will be fixed shortly.

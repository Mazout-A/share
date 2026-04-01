<?php

/**
 * src/Model/Entity/Gamification.php
 */

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Gamification extends Entity
{
    protected array $accessible = [
        // Modified all excluded id
        '*' => true,
        'id' => false,
    ];
}

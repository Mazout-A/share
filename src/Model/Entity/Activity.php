<?php

/**
 * src/Model/Entity/Activity.php
 */

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Activity extends Entity
{
    protected array $accessible = [
        // Modified all excluded id
        '*' => true,
        'id' => false,
    ];
}

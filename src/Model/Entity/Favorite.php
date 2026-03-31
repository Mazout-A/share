<?php

/**
 * src/Model/Entity/Favorite.php
 */

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Favorite extends Entity
{
    protected array $_accessible = [
        // Modified all excluded id
        '*' => true,
        'id' => false,
    ];
}
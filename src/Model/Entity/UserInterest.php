<?php

/**
 * src/Model/Entity/UserInterest.php
 */

namespace App\Model\Entity;

use Cake\ORM\Entity;

class UserInterest extends Entity
{
    protected array $_accessible = [
        // Modified all excluded id
        '*' => true,
        'id' => false,
    ];
}
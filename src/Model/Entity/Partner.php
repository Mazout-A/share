<?php

/**
 * src/Model/Entity/Partner.php
 */

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Partner extends Entity
{
    protected array $_accessible = [
        // Modified all excluded id
        '*' => true,
        'id' => false,
    ];
}
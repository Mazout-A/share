<?php

/**
 * src/Model/Entity/Category.php
 */

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Category extends Entity
{
    protected array $_accessible = [
        // Modified all excluded id
        '*' => true,
        'id' => false,
    ];
}
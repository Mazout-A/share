<?php

/**
 * src/Model/Entity/Review.php
 */

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Review extends Entity
{
    protected array $_accessible = [
        // Modified all excluded id
        '*' => true,
        'id' => false,
    ];
}
<?php

/**
 * src/Model/Entity/Booking.php
 */

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Booking extends Entity
{
    protected array $_accessible = [
        // Modified all excluded id
        '*' => true,
        'id' => false,
    ];
}
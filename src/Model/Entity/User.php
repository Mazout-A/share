<?php

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher;

use Cake\ORM\Entity;

class User extends Entity
{
    protected array $accessible = [
    '*' => true,
    'id' => false,
    ];

    protected array $hidden = [
        'password'
    ];
    // Code from bake.

    // Add this method
    protected function _setPassword(string $password): ?string
    {
        if (mb_strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
        return null;
    }

}

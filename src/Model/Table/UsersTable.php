<?php

namespace app\model\Table;

use cake\ORM\Table;

class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        
        $this->hasMany('Bookings',
        ['foreignKey' => 'user_id']
        );

        $this->hasMany('Reviews',
        ['foreignKey' => 'user_id']);

        $this->hasMany('Favorites',
        ['foreignKey' => 'user_id']);

        $this->hasMany('UserInterests',
        ['foreignKey' => 'user_id']);

        $this->hasMany('Gamifications',
        ['foreignKey' => 'user_id']);

    }
}

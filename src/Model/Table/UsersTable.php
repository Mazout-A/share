<?php

namespace App\Model\Table;

use cake\ORM\Table;

class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('username');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Bookings',
        ['foreignKey' => 'user_id']);

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

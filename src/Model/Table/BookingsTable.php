<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class BookingsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);

        $this->belongsTo('Activities', [
            'foreignKey' => 'activity_id'
        ]);
    }
}

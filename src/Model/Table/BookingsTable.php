<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class BookingsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);

        $this->belongsTo('Activities', [
            'foreignKey' => 'activity_id'
        ]);
    }
}

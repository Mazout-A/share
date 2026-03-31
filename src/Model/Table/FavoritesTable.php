<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class FavoritesTable extends Table
{
    public function initialize(array $config): void
    {
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);

        $this->belongsTo('Activities', [
            'foreignKey' => 'activity_id'
        ]);
    }
}

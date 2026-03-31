<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class UserInterestsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id'
        ]);
    }
}

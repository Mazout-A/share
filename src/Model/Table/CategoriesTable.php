<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class CategoriesTable extends Table
{
    public function initialize(array $config): void
    {
        $this->hasMany('Activities', [
            'foreignKey' => 'category_id'
        ]);

        $this->hasMany('UserInterests', [
            'foreignKey' => 'category_id'
        ]);
    }
}

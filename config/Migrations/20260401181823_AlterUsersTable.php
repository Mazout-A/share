<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class AlterUsersTable extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/5/en/migrations.html#the-change-method
     *
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users');

        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
        ])
        ->addColumn('surname', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
        ])
        ->addColumn('familySize', 'integer', [
            'default' => null,
            'null' => true,
        ])
        ->addColumn('age', 'integer', [
            'default' => null,
            'null' => true,
        ])
        ->addColumn('pmr', 'boolean', [
            'default' => false,
            'null' => false,
        ])
        ->changeColumn('status', 'enum', [
            'values' => ['seul', 'couple', 'famille'],
            'default' => 'seul',
            'null' => false,
        ])
        ->update();
    }
}
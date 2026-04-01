<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class AlterActivities extends BaseMigration
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
        $table = $this->table('activities');
        $table->update();

        $table->addColumn('api_id', 'string', [
        'default' => null,
        'limit' => 100,
        'null' => true,
    ]);

    $table->addColumn('url_paris', 'string', [
        'default' => null,
        'limit' => 255,
        'null' => true,
    ]);

    // verifie si evenement existe deja ou non 
    $table->addIndex(['api_id']);

    $table->update();
    }
}

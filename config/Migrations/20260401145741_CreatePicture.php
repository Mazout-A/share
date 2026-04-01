<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreatePicture extends BaseMigration
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
        $table = $this->table('pictures');
        $table->addColumn('created_at', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified_at', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('file', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('business_id', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('event_id', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->create();
    }
}

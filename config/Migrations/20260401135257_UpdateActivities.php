<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class UpdateActivities extends BaseMigration
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
        // 1. Mise à jour de la table Activities (Précision exacte)
    $activities = $this->table('activities');
    $activities->changeColumn('latitude', 'string')
               ->changeColumn('longitude', 'string')
               ->update();

    }
}

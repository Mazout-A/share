<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class AddReservationDateToBookings extends BaseMigration
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
        $table = $this->table('bookings');
        $table->addColumn('reservation_date', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->update();
    }
}

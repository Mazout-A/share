<div>
    <h2>mes resa</h2>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Numerique</th>
                    <th>Activiter</th>
                    <th>Status</th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($bookings as $booking): ?>
                    <tr>
                        <td><?= $this->Number->format($booking->id) ?></td>
                        <td><?= $booking->hasValue('activity') ? h($booking->activity->title) : 'pas dispo' ?></td>
                        <td><?= h($booking->status) ?></td>
                        <td>
                            <?= $this->Html->link('mon billet', ['action' => 'view', $booking->id]) ?>
                        </td>
                    </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
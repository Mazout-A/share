
<div class="bookings view">
    <h3>Détails de la réservation #<?= h($booking->id) ?></h3>
    
    <table>
        <tr>
            <th>Utilisateur</th>
            <!-- On affiche le nom et on crée un lien vers son profil -->
            <td><?= $booking->has('user') ? $this->Html->link($booking->user->name . ' ' . $booking->user->surname, ['controller' => 'Users', 'action' => 'view', $booking->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Activité réservée</th>
            <!-- On affiche le nom de l'activité avec un lien -->
            <td><?= $booking->has('activity') ? $this->Html->link($booking->activity->title, ['controller' => 'Activities', 'action' => 'view', $booking->activity->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Date de réservation</th>
            <td>
            <?= $booking->hasValue('reservation_date')
            ? $booking->reservation_date->i18nFormat('dd/MM/yyyy à HH:mm') : 'Non définie' ?>
            </td>
        </tr>
        <tr>
            <th>Statut</th>
            <td><?= h($booking->status) ?></td>
        </tr>
    </table>
</div>
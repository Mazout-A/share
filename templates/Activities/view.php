<div class="activity-view">
    <h1><?= h($activity->title) ?></h1>

    <div class="details">
        <p><strong>Description :</strong> <?= h($activity->description) ?></p>
        <p><strong>Adresse :</strong> <?= h($activity->address) ?></p>
        <p><strong>Prix :</strong> <?= $activity->price == 0 ? 'Gratuit' : $this->Number->currency($activity->price, 'EUR') ?></p>

        <p><strong>Type :</strong> <?= h($activity->participant_type) ?></p>
        <p><strong>En intérieur :</strong> <?= $activity->is_indoor ? 'Oui' : 'Non' ?></p>
        <p><strong>Accès PMR :</strong> <?= $activity->is_accessible ? 'Oui' : 'Non' ?></p>

        <!-- Affichage de la catégorie chargée via contain -->
        <p><strong>Catégorie :</strong>
            <?= $activity->has('category') ? h($activity->category->name) : 'Non spécifiée' ?>
        </p>

        <!-- Dates formatées (on vérifie si elles existent pour éviter les bugs) -->
        <p><strong>Début :</strong> <?= $activity->start ? $activity->start->format('d/m/Y H:i') : 'N/C' ?></p>
        <p><strong>Fin :</strong> <?= $activity->end ? $activity->end->format('d/m/Y H:i') : 'N/C' ?></p>
    </div>

    <hr>

    <div class="actions">
        <!-- Bouton Favoris -->
        <?php if (isset($isFavorite) && $isFavorite): ?>
            <?= $this->Form->postLink(
                '<i class="fa fa-heart" style="color: red;"></i> Retirer des favoris',
                ['controller' => 'Favorites', 'action' => 'delete', $favoriteId],
                ['escape' => false, 'class' => 'button', 'title' => 'Retirer de mes favoris']
            ) ?>
        <?php else: ?>
            <?= $this->Form->postLink(
                '<i class="fa fa-heart"></i> Ajouter aux favoris',
                ['controller' => 'Favorites', 'action' => 'add', $activity->id],
                ['escape' => false, 'class' => 'button', 'title' => 'Ajouter à mes favoris']
            ) ?>
        <?php endif; ?>

        <br><br>

        <!-- Retour à la liste -->
        <?= $this->Html->link('Retour aux activités', ['action' => 'index'], ['class' => 'button secondary']) ?>
    </div>
</div>
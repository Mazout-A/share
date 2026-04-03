<div class="favorites-view">
    <!-- En-tête bleu -->
    <div class="top-nav">
        <h2 class="nav-title">Mes sauvegardes</h2>
    </div>

    <!-- Filtres visuels (Radio buttons cachés pour simuler le choix unique) -->
    <div class="filter-bar">
        <input type="radio" name="filter" id="f-prochainement" checked>
        <label for="f-prochainement">Prochainement</label>

        <input type="radio" name="filter" id="f-sauvegardees">
        <label for="f-sauvegardees">Sauvegardées</label>

        <input type="radio" name="filter" id="f-passees">
        <label for="f-passees">Passées</label>
    </div>

    <div class="margin">
        <h3 class="section-subtitle">A venir</h3>

        <?php if (!$favorites->items()->isEmpty()): ?>
            <div class="cards-grid">
                <?php foreach ($favorites as $favorite): ?>
                    <?php if ($favorite->hasValue('activity')): ?>
                        <div class="grid-card">
                            <?= $this->Html->link(
                                '<div class="image-placeholder"></div>' .
                                '<div class="info-grid">' .
                                    '<h3>' . h($favorite->activity->title) . '</h3>' .
                                    '<p>' . h($favorite->activity->address ?? 'Localisation') . '</p>' .
                                '</div>',
                                ['controller' => 'Activities', 'action' => 'view', $favorite->activity_id],
                                ['escape' => false, 'class' => 'card-link']
                            ) ?>
                            <!-- Petit bouton de suppression discret si besoin -->
                            <?= $this->Form->postLink('<i class="fa fa-times"></i>', 
                                ['action' => 'delete', $favorite->id], 
                                ['escape' => false, 'class' => 'remove-fav', 'confirm' => 'Retirer des favoris ?']) 
                            ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <div class="pagination">
                <?= $this->Paginator->numbers() ?>
            </div>
            
        <?php else: ?>
            <p class="empty-msg">Tu n'as aucune activité en favoris pour le moment.</p>
        <?php endif; ?>
    </div>
</div>

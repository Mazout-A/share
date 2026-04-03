<div class="activity-detail-page">
    <!-- Header avec barre de navigation -->
    <div class="top-nav">
        <?= $this->Html->link('<i class="fa fa-chevron-left"></i>', ['action' => 'index'], ['escape' => false, 'class' => 'back-btn']) ?>
        <button class="share-btn">Partager</button>
    </div>

    <div class="margin">
        <!-- Section Titre et Image -->
        <div class="header-section">
            <div class="image-wrapper">
                <div class="main-image-placeholder"></div>
                <!-- Bouton Favoris (Positionné sur l'image) -->
                <div class="fav-container">
                    <?php if (isset($isFavorite) && $isFavorite): ?>
                        <?= $this->Form->postLink('<i class="fa fa-bookmark"></i>', 
                            ['controller' => 'Favorites', 'action' => 'delete', $favoriteId],
                            ['escape' => false, 'class' => 'fav-link active']) ?>
                    <?php else: ?>
                        <?= $this->Form->postLink('<i class="fa fa-bookmark-o"></i>', 
                            ['controller' => 'Favorites', 'action' => 'add', $activity->id],
                            ['escape' => false, 'class' => 'fav-link']) ?>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="title-block">
                <h1><?= h($activity->title) ?></h1>
                <p class="address"><i class="fa fa-map-marker"></i> <?= h($activity->address) ?></p>
                <span class="category-badge"><?= $activity->has('category') ? h($activity->category->name) : 'Loisir' ?></span>
            </div>
        </div>

        <!-- Informations Pratiques -->
        <section class="info-section">
            <h2>Informations Pratiques</h2>
            <div class="info-row">
                <span>Téléphone</span>
                <span class="val">Téléphone</span>
            </div>
            <div class="info-row">
                <span>Site internet</span>
                <span class="val url">Site internet</span>
            </div>
            <div class="info-row">
                <span>Tranche de prix</span>
                <span class="val prix"><?= $activity->price == 0 ? 'Gratuit' : $this->Number->currency($activity->price, 'EUR') . '/Personne' ?></span>
            </div>
        </section>

        <!-- Accessibilité -->
        <section class="info-section">
            <h2>Accessibilité</h2>
            <div class="info-row">
                <span>Parking</span>
                <span class="val">Oui</span>
            </div>
            <div class="info-row">
                <span>Accès PMR</span>
                <span class="val"><?= $activity->is_accessible ? 'Oui' : 'Non' ?></span>
            </div>
        </section>

        <!-- Horaires (Statique pour l'instant comme sur la maquette) -->
        <section class="info-section">
            <h2>Horaires</h2>
            <div class="horaires-card">
                <?php 
                $jours = ['Lundi' => 'Fermé', 'Mardi' => '10:00 - 20:00', 'Mercredi' => '10:00 - 20:00', 'Jeudi' => '10:00 - 20:00', 'Vendredi' => '10:00 - 20:00', 'Samedi' => '10:00 - 20:00', 'Dimanche' => '10:00 - 20:00'];
                foreach ($jours as $jour => $heure): ?>
                <div class="info-row">
                    <span><?= $jour ?></span>
                    <span class="val"><?= $heure ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</div>
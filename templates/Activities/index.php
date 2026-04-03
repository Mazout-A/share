<section class="margin">
<div class="index_activitis">

    <?php $identity = $this->request->getAttribute('identity'); ?>
    <?php if ($identity): ?>
        <div class="user-welcome">
            <?php if (!empty($identity->photo_url)): ?>
                <?= $this->Html->image($identity->photo_url, ['alt' => 'Photo de profil', 'class' => 'profile-pic']) ?>
            <?php endif; ?>
            <h2>Bonjour <?= h($identity->name) ?> <?= h($identity->surname) ?></h2>
        </div>
    <?php endif; ?>

    <div>

        <?php if (count($activities) === 0): ?>
            <p style="color:red;">Attention : La variable activities est vide !</p>
        <?php endif; ?>

        <?php
        // On transforme les résultats en tableau pour les découper
        $activitiesArray = $activities->toArray();

        // Découpage en 3 groupes (3, 3 et 4)
        $groupe1 = array_slice($activitiesArray, 0, 3);
        $groupe2 = array_slice($activitiesArray, 3, 3);
        $groupe3 = array_slice($activitiesArray, 6, 4);
        ?>

        <div class="activites-groupe-1">
            <h2>À L'affiche</h2>
            <div class="carousel">
                <?php foreach ($groupe1 as $activity): ?>
                    <a href="<?= $this->Url->build(['action' => 'view', $activity->id]) ?>" class="activity-card">
                        <h3><?= h($activity->title) ?></h3>
                        <p>Date : <?= $activity->start ? h($activity->start->format('d/m/Y à H:i')) : 'À venir' ?></p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <section class="section-container events-horizontal">
        <div class="section-header">
            <h2>Nos évènements</h2>
            <?= $this->Html->link('Voir plus >', ['action' => 'index'], ['class' => 'view-more']) ?>
        </div>
        
        <div class="cards-list">
            <?php foreach ($groupe2 as $activity): ?>
                <?= $this->Html->link(
                    '<div class="card-content">' .
                        '<div class="info">' .
                            '<h3>' . h($activity->title) . '</h3>' .
                            '<p>Le ' . ($activity->start ? h($activity->start->format('d/m à H:i')) : 'À venir') . '</p>' .
                        '</div>' .
                        '<div class="badge-fake">' .
                            '<strong>12</strong>' .
                            '<span>places</span>' .
                        '</div>' .
                    '</div>',
                    ['action' => 'view', $activity->id],
                    ['escape' => false, 'class' => 'activity-card-link']
                ) ?>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Section Pour vous (Style Grille) -->
    <section class="section-container">
        <div class="section-header">
            <h2>Pour vous</h2>
            <?= $this->Html->link('Voir plus >', ['action' => 'index'], ['class' => 'view-more']) ?>
        </div>
        
        <div class="cards-grid">
            <?php foreach ($groupe3 as $activity): ?>
                <?= $this->Html->link(
                    '<div class="image-placeholder"></div>' .
                    '<div class="info-grid">' .
                        '<h3>' . h($activity->title) . '</h3>' .
                        '<p>Localisation</p>' .
                    '</div>',
                    ['action' => 'view', $activity->id],
                    ['escape' => false, 'class' => 'grid-card-link']
                ) ?>
            <?php endforeach; ?>
        </div>
    </section>
    </div>

    <div class="pagination">
        <?= $this->Paginator->first('<< Premier') ?>
        <?= $this->Paginator->prev('< Précédent') ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('Suivant >') ?>
        <?= $this->Paginator->last('Dernier >>') ?>
    </div>
</div>
</section>
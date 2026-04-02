
<div class="index_activitis">
    <h2>Activités</h2>
    <div>
        <p>Nombre d'éléments : <?= count($activities) ?></p>

        <?php if (count($activities) === 0): ?>
            <p style="color:red;">Attention : La variable activities est vide !</p>
        <?php endif; ?>

        <?php foreach ($activities as $activity): ?>
            <div class="activity-card">
                <h3><?= h($activity->title) ?></h3>

                <!-- Vérification de la catégorie -->
                <p>Catégorie : <?= $activity->has('category') ? h($activity->category->name) : 'Non définie' ?></p>

                <!-- Gestion du prix gratuit ou payant -->
                <p>Prix : <?= $activity->price == 0 ? 'Gratuit' : $this->Number->currency($activity->price, 'EUR') ?></p>

                <!-- Vérification de la date avant formatage -->
                <p>Date : <?= $activity->start ? h($activity->start->format('d/m/Y à H:i')) : 'À venir' ?></p>

                <?= $this->Html->link('Détail', ['action' => 'view', $activity->id], ['class' => 'button']) ?>
                <hr>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <?= $this->Paginator->first('<< Premier') ?>
        <?= $this->Paginator->prev('< Précédent') ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('Suivant >') ?>
        <?= $this->Paginator->last('Dernier >>') ?>
    </div>
</div>

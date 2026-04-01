<div class="index_activitis">

    <h2>Activités</h2>
    <div>
        <?php foreach ($activities as $activity): ?>
            <h3><?= h($activity->title)?></h3>

            <p>Catégories : <?= $activity->hasValue('category') ? h($activity->category->name) : 'Non définie' ?></p>

            <p>Prix : <?= $activity->price == 0 ? 'Gratuit' : $this->Number->currency($activity->price, 'EUR') ?></p>

            <p>Date : <?= h($activity->start->format('d/m/Y à H:i')) ?></p>

            <?= $this->Html->link('détail', ['action' => 'view', $activity->id], ['class' => 'button']) ?>
        <?php endforeach; ?>
    </div>


    <div>
            <?= $this->Paginator->first('<< Premier') ?>
            <?= $this->Paginator->prev('< Précédent') ?>
            <?= $this->Paginator->next('Suivant >') ?>
            <?= $this->Paginator->last('Dernier >>') ?>
    </div>
</div>
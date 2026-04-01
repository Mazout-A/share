<div class="add_categories">

    <h2>Ajouter une categories</h2>
    <?= $this->Form->create($category) ?>

    <fieldset>
        <?= $this->Form->control('name', ['label' => 'ajoute une catégories ex : sport...']) ?>
    </fieldset>
    <?= $this->Form->button('enregistre') ?>

    <?= $this->Form->end() ?>

    <?= $this->Html->link('Arriere', ['action' => 'index'], ['class' => 'button']) ?>
</div>
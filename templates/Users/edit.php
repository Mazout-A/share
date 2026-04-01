<div class="edit">

    <h2>Modification profil</h2>
    <?= $this->Form->create($user) ?>

    <fieldset>
        <?= $this->Form->control('name', ['label' => 'Prénom']) ?>
        <?= $this->Form->control('surname', ['label' => 'Nom de famille']) ?>
        <?= $this->Form->control('email', ['label' => 'Email']) ?>
        <?= $this->Form->control('age', ['label' => 'Äge']) ?>

        <?= $this->Form->control('status', [
            'type' => 'select',
            'options' => ['Seul(e)', 
            'couple' => 'En couple', 
            'famille' => 'En famille'
            ]]) ?>

            <?= $this->Form->control('pmr', ['label' => 'Accès mobilité reduite']) ?>

    </fieldset>
    <?= $this->Form->button('Sauvegarde') ?>
    <?= $this->Form->end() ?>
</div>

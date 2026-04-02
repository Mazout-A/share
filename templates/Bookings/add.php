<div>

    <h2>Reserve</h2>
    <?= $this->Form->create($booking) ?>
    <fieldset>
        <?= $this->Form->control('activity_id', [
            'option' => $activities,
            'label' => 'Choisissez votre activité',
            'empty' => 'selectionne une option' 
        ]) ?>

        <?= $this->Form->control('tickets_count', [
            'type' => 'number',
            'label' => 'nombre de place',
            'value' => '1',
            'min' => '1'
        ]) ?>
    </fieldset>

    <?= $this->Form->button('confirme') ?>
    <?= $this->Form->end() ?>

</div>
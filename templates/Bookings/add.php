<div>

    <h2>Reserve</h2>
    <?= $this->Form->create($booking) ?>
    <fieldset>
        <?= $this->Form->control('activity_id', [
            'option' => $activities,
            'label' => 'Choisissez votre activité',
            'empty' => 'selectionne une option' 
        ]) ?>

        <?= $this->Form->control(
            'reservation_date', [
            'label' =>'Date de reservation',
            'type' => 'datetime-local'
            ]
        ) ?>
    </fieldset>

    <?= $this->Form->button('confirme') ?>
    <?= $this->Form->end() ?>

</div>
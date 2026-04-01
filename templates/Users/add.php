<div class="onboarding_container">

    <h2>Création du compte</h2>

    <?= $this->Form->create($user) ?>

    <div id="etape_1" class="form">

        <h3>étape 1 : qui etes-vous ?</h3>

            <?= $this->Form->control('name', ['label' => 'Prénom', 'required' => true]) ?>
            <?= $this->Form->control('surname', ['label' => 'Nom', 'required' => true]) ?>
            <?= $this->Form->control('email', ['label' => 'Email', 'required' => true]) ?>
            <?= $this->Form->control('password', ['label' => 'Mot de passe', 'required' => true]) ?>
            <?= $this->Form->control('age', ['label' => 'Âge', 'type' => 'number']) ?>

        <button class="btn_next" onclick="etape2()" type="button">-></button>

    </div>

    <div class="form etape" id="etape_2" style="display: none;">

        <h3>Etape 2 : votre situation</h3>

            <?= $this->Form->control('status', [
                'type' => 'select',
                'label' =>'Vous etes ?',
                'options' => [
                    'seul' => 'Seul(e)',
                    'couple' => 'En couple',
                    'famille' => 'En famille',
                ],
                'id' => 'options']) ?>

            <div id="famille" style="display: none;">
                <?= $this->Form->control('familySize',[
                'type' => 'number',
                'label' =>'Combien de personne au total ?',
                'min' => '3'
                ]) ?>
            </div>

            <?= $this->Form->control('pmr',[
            'type' => 'checkbox',
            'label' => 'Je suis handicapé (PMR)'
            ]
            ) ?>

        <button class="btn_next" onclick="etape1()" type="button"><-</button>
        <button class="btn_next" onclick="etape3()" type="button">-></button>

    </div>

    <div class="form etape" id="etape_3" style="display: none;">

        <h3>Etape 3: Centre d'interet</h3>

            <?= $this->Form->control('categories._id',[
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $categories,
                'label' => false
            ]
            ) ?>

        <button class="btn_next" onclick="etape2()" type="button"><-</button>

        <?= $this->Form->button('terminer', ['type' => 'submit', 'class' => 'btn_submit']) ?>

    </div>

<?= $this->Form->end() ?>

<?= $this->Html->script('form') ?>
</div>

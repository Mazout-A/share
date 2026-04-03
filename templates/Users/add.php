<section class="add">

    <h2>Création de votre compte</h2>

    <?= $this->Form->create($user) ?>

    <section class="carte-add">

    <section class="form" id="etape_1">

        <h3>étape 1 : qui etes-vous</h3>

    <label class="label">Prénom</label>
        <?= $this->Form->control('name', [
            'label' => false, 
            'required' => true, 
            'class' => 'input',
            'placeholder' => 'Prénom']) ?>


    <label class="label">Nom de famille</label>
        <?= $this->Form->control('surname', [
            'label' => false, 
            'required' => true, 
            'class' => 'input',
            'placeholder' => 'Nom de famille']) ?>


    <label class="label">E-mail</label>
        <?= $this->Form->control('email', ['label' => false, 'required' => true, 'class' => 'input',
            'placeholder' => 'votre@email.com']) ?>


    <label class="label">Mot de passe</label>
        <?= $this->Form->control('password', ['label' => false, 'required' => true, 'class' => 'input',
            'placeholder' => 'Mot de passe']) ?>


    <label class="label">Âge</label>
        <?= $this->Form->control('age', ['label' => false, 'required' => true, 'class' => 'input',
            'placeholder' => 'Âge']) ?>

        <button class="btn_next" onclick="etape2()" type="button">Suivant</button>

    </section>

    <section class="form" id="etape_2" style="display: none;">
        <h3>étape 2 : Votre situation</h3>

    <label class="label">Vous etes ?</label>
        <?= $this->Form->control('status', [
            'type' => 'select',
            'label' =>false,
            'options' => [
                'seul' => 'Seul(e)',
                'couple' => 'En couple',
                'famille' => 'En famille',
            ],
            'id' => 'options',
            'class' => 'input',
            'placeholder' => 'situation'
        ]) ?>

        <div id="famille" style="display: none;">
            <label class="label">Nombre de personne</label>
            <?= $this->Form->control('familySize',[
                'type' => 'number',
                'label' =>false,
                'min' => '3',
                'id' => 'familysize',
                'class' => 'input',
            'placeholder' => '3'
            ]) ?>
        </div>
    <button class="btn_next" onclick="etape3()" type="button">suivant</button>
    <button class="btn_next" onclick="etape1()" type="button">retour</button>
    
    </section>

    <section class="form etape" id="etape_3" style="display: none;">
    <h3>étape 3 : centres d'interets</h3>

    <label class="label">Catégories</label>
    <?= $this->Form->control('categories._ids',[
        'type' => 'select',
        'multiple' => 'checkbox',
        'options' => $categories,
        'label' => false,
            'placeholder' => 'Catégories'
    ]) ?>

<label class="label">Situation d'handicape</label>
    <?= $this->Form->control(
            'pmr',
            [
                'type' => 'checkbox',
                'label' => 'Je suis handicapé (PMR)'
            ]
        ) ?>

    <button class="btn_next" onclick="etape2()" type="button">Retour</button>
    <?= $this->Form->button('terminer', ['type' => 'submit', 'class' => 'btn_add']) ?>

    </section>



    </div>

    <?= $this->Form->end() ?>

    <?= $this->Html->script('form') ?>
</div>


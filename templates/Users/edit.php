<div class="profile-edit">
    <?= $this->Form->create($user, ['class' => 'edit-form']) ?>
    
    <!-- Barre de navigation supérieure -->
    <div class="top-nav">
        <h2 class="nav-title">Mon compte</h2>
        <?= $this->Form->button('Sauvegarder', ['class' => 'save-btn-top']) ?>
    </div>

    <div class="margin">
        <!-- Section Identité -->
        <div class="form-grid header-edit">
            <div class="input-block">
                <?= $this->Form->control('surname', ['label' => 'Nom', 'placeholder' => '[nom]']) ?>
            </div>
            <div class="input-block">
                <label>Ville</label>
                <input type="text" placeholder="[ville]" disabled> <!-- Champ simulé selon maquette -->
            </div>
            <div class="input-block">
                <?= $this->Form->control('name', ['label' => 'Prénom', 'placeholder' => '[prénom]']) ?>
            </div>
            
            <!-- Simulation des boutons de catégories (Interêts) -->
            <div class="interests-selection">
                <span class="badge-input loisir"><span class="dot"></span> Loisir</span>
                <span class="badge-input sport"><span class="dot"></span> Sport</span>
                <span class="badge-input culture"><span class="dot"></span> Culture</span>
            </div>
        </div>

        <!-- Section Mes Informations -->
        <section class="form-section">
            <h2>Mes Informations</h2>
            <div class="form-grid">
                <?= $this->Form->control('email', ['label' => 'E-mail', 'placeholder' => 'nom.prenom@gmail.com']) ?>
                <?= $this->Form->control('password', ['label' => 'Mot de passe', 'placeholder' => '[.......]', 'value' => '']) ?>
                
                <?= $this->Form->control('familysize', ['label' => 'Nombre de participant', 'type' => 'number']) ?>
                <?= $this->Form->control('pmr', [
                    'label' => 'Situation de handicap',
                    'type' => 'select',
                    'options' => [0 => 'Non', 1 => 'Oui']
                ]) ?>
                
                <div class="input-block age-input">
                    <?= $this->Form->control('age', ['label' => 'Age du plus jeune enfant']) ?>
                    <span class="unit">ans</span>
                </div>
            </div>
        </section>

        <!-- Mes préférences -->
        <section class="form-section">
            <h2>Mes préférences</h2>
            <div class="form-grid">
                <div class="input-block">
                    <label>Géolocalisation</label>
                    <select disabled><option>Non</option></select>
                </div>
                <div class="input-block">
                    <label>Coockies</label> <!-- Typo conservée de la maquette ;) -->
                    <select disabled><option>Acceptés</option></select>
                </div>
            </div>
        </section>

        <div class="form-actions">
            <?= $this->Form->button('Sauvegarder', ['class' => 'save-btn-main']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>

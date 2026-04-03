<section class="login">

    <div class="header">
        <h3>Mon compte</h3>
    </div>

    <div class="gap"></div>

    <div class="carte-login">
        <h1 class="titre-login"> 
        Profiter de recommandation
        <span class="orange">personnalisé</span>
        </h1>

        <div class="action-login">
            <?= $this->Html->link('Se connecter', ['controller' => 'users', 'action' => 'login'], ['class' => 'button-primaire']) ?>

            <?= $this->Html->link('Créer un compte', ['controller' => 'users', 'action' => 'add'], ['class' => 'button-secondary']) ?>
            
            <?= $this->Html->link('S\'inscrire en tant qu\'entreprise', ['controller' => 'users', 'action' => 'login'], ['class' => 'lien']) ?>
        </div>
    </div>

</section>
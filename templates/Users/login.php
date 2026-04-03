<section class="login">

    <div class="header">
        <h3>Mon compte</h3>
    </div>

    <div class="gap"></div>

    <div class="carte-login">
        <h1 class="titre-login">Ravi de vous <br>revoir</h1>

        <?= $this->Form->create(null, 
        ['class' => 'form-login']) ?>
        <div class="input-login">
            <label class="label">E-mail</label>
            <?= $this->Form->control('email',[
            'label' => false,
            'placeholder' => 'votre@email.com',
            'class' => 'input']) ?>
        </div>

        <div class="input-login">
            <label class="label">Mot de passe</label>
            <?= $this->Form->control('password',[
            'label' => false,
            'placeholder' => '********',
            'class' => 'input']) ?>
            <a href="#" class="link-mdp">Mot de passe oublié</a>
        </div>
        <?= $this->Form->button('Se connecter', ['class' => 'button-primaire']) ?>
        <?= $this->Form->end() ?>
    </div>

</section>
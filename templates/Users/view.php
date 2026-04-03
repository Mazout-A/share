<div class="profile-view">
    <!-- Barre de navigation supérieure -->
    <div class="top-nav">
        <h2 class="nav-title">Mon compte</h2>
        <?= $this->Html->link('Modifier', ['action' => 'edit', $user->id], ['class' => 'edit-btn-top']) ?>
    </div>

    <div class="margin">
        <!-- Section Identité -->
        <div class="header-section">
            <div class="image-wrapper">
                <?php if ($user->photo_url): ?>
                    <?= $this->Html->image($user->photo_url, ['class' => 'profile-img']) ?>
                <?php else: ?>
                    <div class="main-image-placeholder"></div>
                <?php endif; ?>
            </div>
            
            <div class="title-block">
                <h1><?= h($user->name) ?> <br> <?= h($user->surname) ?></h1>
                <p class="address">Paris, 75004</p> <!-- Statique pour la maquette -->
                
                <div class="interests-badges">
                    <?php if (!empty($user->categories)): ?>
                        <?php foreach ($user->categories as $category): ?>
                            <span class="badge" style="background-color: var(--<?= strtolower(h($category->name)) ?>);">
                                <?= h($category->name) ?>
                            </span>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <span class="badge" style="background-color: var(--loisir);">Loisir</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Mes Informations -->
        <section class="info-section">
            <h2>Mes Informations</h2>
            <div class="info-row">
                <span>Nombre de participant</span>
                <span class="val"><?= h($user->familysize) ?></span>
            </div>
            <div class="info-row">
                <span>Âge du plus jeune enfant</span>
                <span class="val"><?= h($user->age) ?> ans</span>
            </div>
            <div class="info-row">
                <span>Situation de handicap (PMR)</span>
                <span class="val"><?= $user->pmr ? 'Oui' : 'Non' ?></span>
            </div>
            <div class="info-row">
                <span>E-mail</span>
                <span class="val url"><?= h($user->email) ?></span>
            </div>
            <div class="info-row">
                <span>Mot de passe</span>
                <span class="val">............</span>
            </div>
        </section>

        <!-- Mes préférences -->
        <section class="info-section">
            <h2>Mes préférences</h2>
            <div class="info-row">
                <span>Géolocalisation de l'appareil</span>
                <span class="val">Non</span>
            </div>
            <div class="info-row">
                <span>Cookies</span>
                <span class="val">Acceptés</span>
            </div>
        </section>

        <!-- Bouton Déconnexion -->
        <div class="action-footer">
            <?php $identity = $this->request->getAttribute('identity'); ?>
            <?php if ($identity): ?>
                <?= $this->Html->link('Se déconnecter', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'logout-link']) ?>
            <?php endif; ?>
        </div>
    </div>
</div>
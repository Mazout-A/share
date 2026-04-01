<div class="view">

    <div class="header">
        <h2>Profil de <?= h($user->name) ?> <?= h($user->surname) ?></h2>
        <p>Status : <?= h($user->status) ?></p>
    </div>

    <div class="details">
        <h3>info personnelles</h3>
        <ul>
            <li>Email : <?= h($user->email) ?></li>
            <li>Âge : <?= h($user->age) ?></li>
            <li>Taille de la famille : <?= h($user->familysize) ?></li>
            <li>Handicape : <?= h($user->pmr ? 'Oui' : 'Non') ?></li>
        </ul>
    </div>

    <div class="interet">
        <h3>Centre d'interets</h3>
        <?php if(!empty($user->categories)): ?>
                <ul>
                    <?php foreach ($user->categories as $category): ?>
                        <li><?= h($category->name) ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php else: ?>
                    <p>Aucun centre d'intérêt sélectionné</p>
            <?php endif; ?>
    </div>

    <div class="action_profil">
        <?= $this->Html->link('Modifier',['action' => 'edit', $user->id], ['class' => 'button']) ?>
    </div>

</div>
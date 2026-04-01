<div class="index">

    <?= $this->Html->link('creer un compte', ['action'=>'add'], ['class' => 'button']) ?>
    <h3>Utilisateurs</h3>

    <div class="table">

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Status</th>
                    <th class="action">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $u): ?>
                    <tr>
                        <td><?= $this->Number->format($u->id) ?></td>
                        <td><?= h($u->email)  ?></td>
                        <td><?= h($u->surname) ?></td>
                        <td><?= h($u->name) ?></td>
                        <td><?= h($u->status) ?></td>
                        <td>
                            <?= $this->Html->link('Voir', ['action' => 'view', $u->id]) ?>
                            <?= $this->Html->link('Modifier', ['action' => 'edit', $u->id]) ?>
                            <?= $this->Html->link('Supprimer', ['action' => 'delete', $u->id], ['confirm' => 'sur de vouloir delete ?']) ?>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>

        </table>
    </div>
</div>

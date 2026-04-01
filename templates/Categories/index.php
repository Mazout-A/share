<div class="index_categories">

    <?= $this->Html->link('Nouvelle cat', ['action' => 'add'], ['class' => 'button']) ?>
    <h3>Catégories</h3>
    <div class="table">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th class="action"> Action</th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= $this->Number->format ($category->id)?></td>
                    <td><?= h($category->name) ?></td>
                    <td>
                        <?= $this->Form->postLink('Supprimer', ['action' => 'delete', $category->id], ['confirm' => 'Supprimer cette catégorie ?']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    </div>

</div>
<div class="favorites index content">
    <h2>Mes Activités Favorites</h2>

    <?php if (!$favorites->items()->isEmpty()): ?>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>Activité</th>
                        <th class="actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($favorites as $favorite): ?>
                        <tr>
                            <!-- On vérifie si l'activité existe toujours pour éviter les erreurs -->
                            <td>
                                <?= $favorite->hasValue('activity') ? h($favorite->activity->title) : 'Activité indisponible' ?>
                            </td>
                            <td class="actions">
                                <!-- Le lien "Voir" redirige directement vers l'Activity -->
                                <?= $this->Html->link('Voir l\'activité', ['controller' => 'Activities', 'action' => 'view', $favorite->activity_id]) ?>
                                
                                <!-- Le lien pour supprimer le favori -->
                                <?= $this->Form->postLink('Retirer', ['action' => 'delete', $favorite->id], ['confirm' => 'Es-tu sûr de vouloir retirer cette activité de tes favoris ?']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <div class="pagination">
            <?= $this->Paginator->numbers() ?>
        </div>
        
    <?php else: ?>
        <p>Tu n'as aucune activité en favoris pour le moment.</p>
    <?php endif; ?>
</div>

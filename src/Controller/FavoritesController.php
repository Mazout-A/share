<?php

namespace App\Controller;

use Cake\Event\EventInterface;

class FavoritesController extends AppController
{
    // Fonction index
    public function index(){

        $this->paginate = ['contain'=> ['Users', 'Activities'],];
        $favorites = $this->paginate($this->Favorites);

        $this->set(compact('favorites'));
    }

    // Fonction add en fav
    public function add($activityId = null)
{
    $this->request->allowMethod(['post', 'put']);
    
    $favorite = $this->Favorites->newEmptyEntity();
    $favorite->user_id = $this->Authentication->getIdentityData('id');
    $favorite->activity_id = $activityId;

    // Optionnel : Vérifier si le favori existe déjà pour éviter les doublons
    $exists = $this->Favorites->exists(['user_id' => $favorite->user_id, 'activity_id' => $activityId]);

    if (!$exists && $this->Favorites->save($favorite)) {
        $this->Flash->success(__('Activité ajoutée aux favoris.'));
    } else {
        $this->Flash->error(__('Déjà en favoris ou erreur lors de l\'ajout.'));
    }

    return $this->redirect($this->referer());
}
    // Supprimer un favori
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $favorite = $this->Favorites->get($id);
        if ($this->Favorites->delete($favorite)) {
            $this->Flash->success(__('Le favori a été supprimé.'));
        }
        return $this->redirect($this->referer());
    }

}


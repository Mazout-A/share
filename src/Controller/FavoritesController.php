<?php

namespace App\Controller;

use Cake\Event\EventInterface;

class FavoritesController extends AppController
{
    // Fonction add pour ajouter un nouveau compte
    public function add()
    {
        $favorite = $this->Favorites->newEmptiEntity();
        if ($this->request->is('post')) {
            $favorite = $this->Favorites->patchEntity(
                $favorite, $this->request->getdata());
                if ($this->Favorites->save($favorite)) {
                    $this->Flash->success('Votre compte a bien etait créer');

                    return $this->redirect(['action' => 'view']);
                }
                $this->Flash->error('Votre compte n\'a pas était creer');
        }
        $this->set(compact('favorite'));
    }

    // fonction qui permet de delete un compte
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $favorite = $this->Favorites->get($id);
        if ($this->Favorites->delete($favorite)){
            $this->Flash->success('Votre compte a était supprimer');
        } else{
            $this->Flash->error('Votre compte n\'pas pu etre supprimé');
        }
        return $this->redirect(['action' => 'add']);
    }

}


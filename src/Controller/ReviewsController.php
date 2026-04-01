<?php

namespace App\Controller;

use Cake\Event\EventInterface;

class ReviewsController extends AppController
{

    // Fonction add pour ajouter un nouveau compte
    public function add()
    {
        $review = $this->Reviews->newEmptyEntity();
        if ($this->request->is('post')) {
            $review = $this->Reviews->patchEntity(
                $review, $this->request->getData());
                if ($this->Reviews->save($review)) {
                    $this->Flash->success('Votre compte a bien etait créer');

                    return $this->redirect(['action' => 'view', $review->id]);
                }
                $this->Flash->error('Votre compte n\'a pas était creer');
        }
        $this->set(compact('review'));
    }

    // fonction qui permet de modifier les données d'un compte
    public function edit($id = null)
    {
        $review = $this->Reviews->get($id, contain: []);
        if($this->request->is(['patch', 'post', 'put']))
            {
                $review = $this->Reviews->patchEntity($review,
                $this->request->getDate());
                if($this->Reviews->save($review)) {
                    $this->Flash->success('Les modification sont sauvegarder');

                    return $this->redirect(['action' => 'view']);
                }
                $this->Flash->error('Les modification n\'ont etait pris en compte');
            }
            $this->set(compact('review'));
    }

    // fonction qui permet de delete un compte
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $review = $this->Reviews->get($id);
        if ($this->Reviews->delete($review)){
            $this->Flash->success('Votre compte a était supprimer');
        } else{
            $this->Flash->error('Votre compte n\'pas pu etre supprimé');
        }
        return $this->redirect(['action' => 'add']);
    }

}


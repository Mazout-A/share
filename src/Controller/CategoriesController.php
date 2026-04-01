<?php

namespace App\Controller;

class CategoriesController extends AppController
{

    public function index()
    {
        $category = $this->Categories->find();
        $categories = $this->paginate($category);

        $this->set(compact('categories'));
    }

        // Fonction add pour ajouter un nouveau compte
    public function add()
    {
        $category = $this->Categories->newEmptyEntity();
        if ($this->request->is('post')) {
            $category = $this->Categories->patchEntity(
                $category, $this->request->getData());
                if ($this->Categories->save($category)) {
                    $this->Flash->success('Votre categorie a bien etait prise en compte');

                    return $this->redirect(['action' => 'index', $category->id]);
                }
                $this->Flash->error('Votre categroei n\'a pas etait prise en compte');
        }
        $this->set(compact('category'));
    }

    // fonction qui permet de delete un compte
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)){
            $this->Flash->success('Votre categorie a était annulé');
        } else{
            $this->Flash->error('Votre categorie n\'pas pu etre supprimé');
        }
        return $this->redirect(['action' => 'add']);
    }
}
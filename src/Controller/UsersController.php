<?php

namespace App\Controller;

use Cake\Event\EventInterface;

class UsersController extends AppController
{
    // La fonction sert permet au prospect de s'inscrire ou de voir les activité sélectionnés sans etre bloqué
    public function beforeFilter(\Cake\Event\EventInterface $e) : void
    {
        parent::beforeFilter($e);
        $this->Authentication->allowUnauthenticated(
        ['login', 'add']);
    }

    // fonction index pour voir tous les users.
    public function index()
    {
        $user = $this->User->find();
        $users =$this->paginate($user);

        $this->set(compact('users'));
    }

    // fonction view pour voir les profil user.
    public function view($id = null)
    {
        $user = $this->Users->get($id, contain: []);
        $this->set(compact('user'));
    }

    // Fonction add pour ajouter un nouveau compte
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    // fonction qui permet de modifier les données d'un compte
    public function edit($id = null)
    {
        $user = $this->Users->get($id, contain: []);
        if($this->request->is(['patch', 'post', 'put']))
            {
                $user = $this->Users->patchEntity($user,
                $this->request->getDate());
                if($this->User->save($user)) {
                    $this->Flash->success('Les modification sont sauvegarder');

                    return $this->redirect(['action' => 'view']);
                }
                $this->Flash->error('Les modification n\'ont etait pris en compte');
            }
            $this->set(compact('user'));
    }

    // fonction qui permet de delete un compte
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)){
            $this->Flash->success('Votre compte a était supprimer');
        } else{
            $this->Flash->error('Votre compte n\'pas pu etre supprimé');
        }
        return $this->redirect(['action' => 'add']);
    }

    // function qui permet de se connecter
    public function login()
    {
        $result = $this->Authentication->getResult();
        if($result && $result->isValid())
            {
                $target = $this->Authentication->getLoginRedirect() ?? [
                    'controller' => '',
                    'action' => 'add'
                ];
                return $this->redirect($target);
            }
            if ($this->request->is('post'))
                {
                    $this->Flash->error('prénom ou mot de passe incorrect');
                }
    }

    public function logout()
    {
        $this->Authentication->logout();
        return $this->redirect([
            'controller' => 'Users',
            'action' => 'login'
        ]);
    }
}


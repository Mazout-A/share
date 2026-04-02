<?php

namespace App\Controller;

use Cake\Event\EventInterface;

class BookingsController extends AppController
{

    // fonction index pour voir tous les users.
    public function index()
    {
        $booking = $this->Bookings->find();
        $bookings =$this->paginate($booking);

        $this->set(compact('bookings'));
    }

    public function view($id = null)
    {
        $userId = $this->Authentication->getIdentity()->getIdentifier();

        $booking = $this->Bookings->get($id, ['contain' => ['Activities']]);

        if($booking->user_id !== $userId){
            $this->Flash->error('Vous ne pouvez pas reserver');

            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('booking'));
    }

    // Fonction add pour ajouter un nouveau compte
    public function add()

    {
        $booking = $this->Bookings->newEmptyEntity();

        if ($this->request->is('post')) {
            $booking = $this->Bookings->patchEntity(
                $booking, $this->request->getData());

                $booking->user_id = $this->Authentication->getIdentity()->getIdentifier();
                $booking ->status = 'confirmer';

                if ($this->Bookings->save($booking)) {
                    $this->Flash->success('Votre réservation a bien etait prise en compte');

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error('Votre réservation n\'a pas etait prise en compte');
        }
        $activities = $this->Bookings->Activities->find('list',[
            'keyField' => 'id',
            'valuesField' => 'title'
        ])->all();
        $this->set(compact('booking', 'activities'));
    }

    // fonction qui permet de delete un compte
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $booking = $this->Bookings->get($id);
        if ($this->Bookings->delete($booking)){
            $this->Flash->success('Votre réservation a était annulé');
        } else{
            $this->Flash->error('Votre réservation n\'pas pu etre supprimé');
        }
        return $this->redirect(['action' => 'index']);
    }

}


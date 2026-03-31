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

    // Fonction add pour ajouter un nouveau compte
    public function add()
    {
        $booking = $this->Bookings->newEmptiEntity();
        if ($this->request->is('post')) {
            $booking = $this->Bookings->patchEntity(
                $booking, $this->request->getdata());
                if ($this->Bookings->save($booking)) {
                    $this->Flash->success('Votre réservation a bien etait prise en compte');

                    return $this->redirect(['action' => 'view']);
                }
                $this->Flash->error('Votre réservation n\'a pas etait prise en compte');
        }
        $this->set(compact('booking'));
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
        return $this->redirect(['action' => 'add']);
    }

}


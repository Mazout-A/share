<?php

/**
 *Controller/ActivitiesController.php
 */

namespace App\Controller;

class ActivitiesController extends AppController
{

    public function index()
    {
        $activities = $this->paginate($this->Activities->find());
        $this->set(compact('activities'));
    }

    public function view($id = null)
    {
        // On cherche l'ID 1 de la manière la plus simple possible
        $activity = $this->Activities->get($id);

        // On récupère l'ID de l'utilisateur connecté
        $userId = $this->Authentication->getIdentityData('id');
        $isFavorite = false;
        $favoriteId = null;

        if ($userId) {
            // On cherche si un favori existe déjà pour cet utilisateur et cette activité
            $favorite = $this->fetchTable('Favorites')->find()
                ->where(['user_id' => $userId, 'activity_id' => $id])
                ->first();

            if ($favorite) {
                $isFavorite = true;
                $favoriteId = $favorite->id;
            }
        }

        $this->set(compact('activity', 'isFavorite', 'favoriteId'));
    }
}

<?php

/**
 *Controller/ActivitiesController.php
*/

namespace App\Controller;

class ActivitiesController extends AppController{

        public function index()
    {
        $activities = $this->paginate($this->Activities->find());
        $this->set(compact('activities'));
    }

        public function view($id = null)
    {
        // On cherche l'ID 1 de la manière la plus simple possible
        $activity = $this->Activities->get($id);

        $this->set(compact('activity'));
    }

}

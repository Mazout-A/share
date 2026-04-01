<?php

/**
 *Controller/ActivitiesController.php
*/


namespace App\Controller;

class ActivitiesController extends AppController{

    public function index()
    {
        $activitie = $this->Activities->find()->contain(['Categories']);
        $activities = $this->paginate($activitie);

        $this->set(compact('activities'));
    }

    public function view ($id = null)
    {
        $activity = $this->Activities->get($id,[
            'contain' => ['Partners', 'Categories']]);
        
        $this->set(compact('activity'));
    }

}

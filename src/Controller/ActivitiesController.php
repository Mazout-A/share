<?php

/**
 *Controller/ActivitiesController.php
*/


namespace App\Controller;

class ActivitiesController extends AppController{

    public function index()
    {
        $activities = $this->Activities->find();
        $this->set(compact('activities'));
    }

    public function view ($id = null)
    {
        $activity = $this->Activities->get($id,[
            'contain' => ['Partners', 'Categories']]);
        
        $this->set(compact('Categories','Partners', 'activity'));
    }

}

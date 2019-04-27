<?php

namespace app\controllers;

use app\models\Main;

class  MainController extends AppController  {

    //public $layout = 'main';

    public function indexAction() {

        // echo 111;
        //$this->layout = false;
        // $this->layout = 'main';
        //$this->view = 'test';

        $model = new Main;

        $posts = $model->findAll();

        //debug($posts);


        $title = 'PAGE TITLE';
        
        $this->set(compact('title', 'posts'));
    }
}
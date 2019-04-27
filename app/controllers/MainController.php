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

        $post = $model->findOne(2);

        $data = $model->findBySql("SELECT * FROM post ORDER by id DESC LIMIT 2");

        $find = $model->findLike('There', 'text');

        debug($find);

        $title = 'PAGE TITLE';
        
        $this->set(compact('title', 'posts'));
    }
}
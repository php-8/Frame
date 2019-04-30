<?php

namespace app\controllers;

use app\models\Main;
use vendor\core\App;

class  MainController extends AppController  {

    //public $layout = 'main';

    public function indexAction() {

        // echo 111;
        //$this->layout = false;
        // $this->layout = 'main';
        //$this->view = 'test';

        //App::$app->getList();

        $model = new Main;

        $posts = App::$app->cache->get('posts');
        if(!$posts) {
            $posts = $model->findAll();
            App::$app->cache->set('posts', $posts, 3600 * 24);
        }

        $post = $model->findOne(2);

        $data = $model->findBySql("SELECT * FROM post ORDER by id DESC LIMIT 2");

        $find = $model->findLike('There', 'text');

        //debug($find);

        $title = 'PAGE TITLE';
        
        $this->set(compact('title', 'posts'));
    }

    public function testviewAction() {

        $model = new Main;

        $name = 'TEST ACTION';

        $data = $model->findBySql("SELECT * FROM post ORDER by id DESC");

        $this->set(compact('name', 'data'));
        
    }

    public function testAction() {
        
        if($this->isAjax()) {
            $model = new Main;
            $post = $model->findBySql("SELECT * FROM post WHERE id = {$_POST['id']} ORDER by id DESC");
            //debug($post);
            $this->loadView('_test', compact('post'));
            die;
        }

        $test = 'TEST ACTION';

        $this->set(compact('test'));

    }
}

<?php

namespace app\controllers;

class  Main extends App  {

    //public $layout = 'main';

    public function indexAction() {

        // echo 111;
        //$this->layout = false;
        // $this->layout = 'main';
        //$this->view = 'test';
        $name = 'Миша';
        $hi = 'Hello';
        $color = [
            'white' => 'белый',
            'black' => 'черный'
        ];
        $this->set(compact('name', 'hi', 'color'));
    }
}
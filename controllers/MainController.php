<?php

namespace app\controllers;

use yii\web\Controller;

class MainController extends  AppController
{
    public function actionIndex() {
        $this->view->title = "Главная";
        return $this->render('index');
    }

    public function actionCheckout() {
        $this->view->title = "Корзина";
        return $this->render('checkout');
    }

}
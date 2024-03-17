<?php

namespace frontend\controllers;

use common\models\Cart;
use common\models\Product;
use yii\web\Controller;
use Yii;

class CartController extends Controller
{

    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $qty = (int) Yii::$app->request->get('qty');
       // $qty = $qty === null ? 1 : $qty;
        $product = Product::findOne($id);
        
        if(empty($product)) {
            return false;
        }
        
        $session = Yii::$app->session;
        $session->open();
        
        $cart = new Cart();
        $cart->addToCart($product);
        
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
        
    }

    public function actionShow()
    {
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionDelItem()
    {
        $id = Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id);
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionClear()
    {
        $session = \Yii::$app->session;
        $session->open();
        $this->layout = false;
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        return $this->render('cart-modal', compact('session'));
    }

    public function actionView()
    {
        //$this->setMeta("Оформление заказа :: " . \Yii::$app->name);
        return $this->render('view');
    }

}
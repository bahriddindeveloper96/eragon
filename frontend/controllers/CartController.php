<?php

namespace frontend\controllers;

use common\models\Cart;
use common\models\ProductItems;
use common\models\Order;
use common\models\OrderItems;
use yii\web\Controller;
use Yii;

class CartController extends Controller
{
    
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $qty = (int) Yii::$app->request->get('qty');
        $qty = !$qty ? 1 : $qty;
        $product = ProductItems::findOne($id);
        
        if(empty($product)) {
            return false;
        }
        
        $session = Yii::$app->session;
        $session->open();
        
        $cart = new Cart();
        $cart->addToCart($product, $qty);
        if(!Yii::$app->request->isAjax){
            return $this->redirect(Yii::$app->request->referrer);
        }
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
        if(!Yii::$app->request->isAjax){
            return $this->redirect(Yii::$app->request->referrer);
        }
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
        $session = Yii::$app->session;
        $session->open();
        //$this->setMeta("Оформление заказа :: " . \Yii::$app->name);
        return $this->render('view',compact('session'));
    }
    public function actionCheckout()
    {
        $session = Yii::$app->session;
        $session->open();
        $order = new Order();
        if($order->load(Yii::$app->request->post())){
            $order->qty = $session['cart.qty'];
            $order->amount = $session['cart.sum']; 
            $order->user_id = Yii::$app->user->id; 
            // echo '<pre>';
            //     var_dump($order->save());die();
            // echo '</pre>';          
            if($order->save()){
                $this->saveOrderItems($session['cart'],$order->id);
                Yii::$app->session->setFlash('success','Ваш заказ принять');
                $session->remove('cart');
                $session->remove('cart.qty');
                $session->remove('cart.sum');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error','Ошибка');
            }

        }
        return $this->render('checkout',compact('session','order'));
    }
    protected function saveOrderItems($items, $order_id)
    {
        foreach($items as $id=>$item){
            $order_items = new OrderItems();
            $order_items->order_id = $order_id;
            $order_items->product_id = $id;
            $order_items->name = $item['name'];
           // $order_items->name_ru = $item['name_ru'];
            //$order_items->surname_uz = $item['surname'];
            $order_items->surname = $item['name'];
            $order_items->price = $item['price'];
            $order_items->qty_item = $item['qty'];
            $order_items->sum_item = $item['qty'] * $item['price'];
            // echo '<pre>';
            //     var_dump($order_items->order_id);die();
            // echo '</pre>';
            $order_items->save();
            
        }
    }
}
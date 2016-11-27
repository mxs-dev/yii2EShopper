<?php
/**
 * Created by PhpStorm.
 * User: MXS34
 * Date: 27.11.2016
 * Time: 9:41
 */

namespace app\controllers;
use app\models\Product;
use app\models\Category;
use app\models\Cart;
use Yii;

class CartController extends AppController
{
   public function actionAdd($id){
        $product = Product::findOne($id);
        if(empty($product)){
            return false;
        }

        //Session
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product);



        $session->close();
   }

}
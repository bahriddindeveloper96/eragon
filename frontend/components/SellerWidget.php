<?php 
namespace app\components;
use common\models\ProductItems;

use yii\base\Widget;

class SellerWidget extends Widget
{
    public function run()
    {
        $products = ProductItems::find()->all();
        
       
        return $this->render('seller', [
            'products' => $products,            
        ]);
    }
}
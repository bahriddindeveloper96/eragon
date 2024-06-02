<?php 
namespace app\components;
use common\models\ProductItems;

use yii\base\Widget;

class SaleWidget extends Widget
{
    public function run()
    {
        $products = ProductItems::find()->where(['status'=>1])->all();
        
       
        return $this->render('sale', [
            'products' => $products,            
        ]);
    }
}
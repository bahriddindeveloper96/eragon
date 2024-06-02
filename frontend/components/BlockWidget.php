<?php 
namespace app\components;
use common\models\ProductItems;

use yii\base\Widget;

class BlockWidget extends Widget
{
    public function run()
    {
        $products = ProductItems::find()->where(['status'=>1])->all();
        
       
        return $this->render('block', [
            'products' => $products,            
        ]);
    }
}
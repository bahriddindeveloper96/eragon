<?php 
namespace app\components;
use common\models\Cart;

use yii\base\Widget;

class MiniCartWidget extends Widget
{
    public function run()
    {
        // $categories = Category::find()->where(['parent_id' => null])->all();
        // $parents = Category::find()->all();
        // foreach($parents as $parent){
            
        // }
       
        return $this->render('mini-cart', [
            // 'categories' => $categories,
            // 'parent' => $parent,
        ]);
    }
}
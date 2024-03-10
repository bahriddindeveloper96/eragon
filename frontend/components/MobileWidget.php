<?php 
namespace app\components;
use common\models\Category;

use yii\base\Widget;

class MobileWidget extends Widget
{
    public function run()
    {
        $categories = Category::find()->where(['parent_id' => null])->all();
        $parents = Category::find()->all();
        foreach($parents as $parent){
            
        }
       
        return $this->render('mobile', [
            'categories' => $categories,
            'parent' => $parent,
        ]);
    }
}
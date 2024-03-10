<?php 
namespace app\components;
use common\models\Category;

use yii\base\Widget;

class ColorWidget extends Widget
{
    public function run()
    {
        $categories = Category::find()->where(['parent_id' => null])->all();
        $parents = Category::find()->all();
        foreach($parents as $parent){
            
        }
       
        return $this->render('color', [
            'categories' => $categories,
            'parent' => $parent,
        ]);
    }
}
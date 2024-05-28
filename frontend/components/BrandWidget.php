<?php 
namespace app\components;
use common\models\Brand;

use yii\base\Widget;

class BrandWidget extends Widget
{
    public function run()
    {
        $brands = Brand::find()->all();
        
       
        return $this->render('brand', [
            'brands' => $brands,
            
        ]);
    }
}
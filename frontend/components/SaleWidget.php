<?php 
namespace app\components;
use common\models\Banner;

use yii\base\Widget;

class SaleWidget extends Widget
{
    public function run()
    {
        $banners = Banner::find()->all();
        
       
        return $this->render('sale', [
            'banners' => $banners,            
        ]);
    }
}
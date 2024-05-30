<?php 
namespace app\components;
use common\models\Banner;

use yii\base\Widget;

class SellerWidget extends Widget
{
    public function run()
    {
        $banners = Banner::find()->all();
        
       
        return $this->render('seller', [
            'banners' => $banners,            
        ]);
    }
}
<?php 
namespace app\components;
use common\models\Banner;

use yii\base\Widget;

class BlockWidget extends Widget
{
    public function run()
    {
        $banners = Banner::find()->all();
        
       
        return $this->render('block', [
            'banners' => $banners,            
        ]);
    }
}
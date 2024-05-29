<?php 
namespace app\components;
use common\models\Banner;

use yii\base\Widget;

class PosterWidget extends Widget
{
    public function run()
    {
        $banners = Banner::find()->all();
        
       
        return $this->render('poster', [
            'banners' => $banners,            
        ]);
    }
}
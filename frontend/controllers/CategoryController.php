<?php

namespace frontend\controllers;

use common\models\Category;
use common\models\Product;
use common\models\CategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\CategoryAttribute;
use common\models\Model;
use yii\helpers\ArrayHelper;
use yii\web\Response;
use Yii;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Category models.
     *
     * @return string
     */
    public $layout = 'category';
    public function actionIndex()
    {
       $categories = Category::find()->all();

        return $this->render('index', [
            'categories' => $categories,
        ]);
    }

   
    public function actionView($id)
    {
       // $id = Yii::$app->request->get($id);
        $products = Product::find()->where(['category_id'=> $id])->all();
        
        return $this->render('view',compact('products'));
    }
    
    protected function findModel($id)
    {
        if (($model = Category::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

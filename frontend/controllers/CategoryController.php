<?php

namespace frontend\controllers;

use common\models\Category;
use common\models\Product;
use common\models\CategorySearch;
use yii\web\Controller;
use common\models\ProductItems;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\CategoryAttribute;
use common\models\Model;
use yii\helpers\ArrayHelper;
use yii\web\Response;
use yii\data\Pagination;
use Yii;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
{
    /**
     * @inheritDoc
     */
    public function init()
    {

        if (!empty(Yii::$app->request->cookies['language'])) {
            Yii::$app->language = Yii::$app->request->cookies['language'];
        } else {
            Yii::$app->language = 'ru';
        }
        parent::init();
    }
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
    // public function actionIndex()
    // {
    //    $categories = Category::find()->all();

    //     return $this->render('index', [
    //         'categories' => $categories,
    //     ]);
    // }

   
    public function actionView($id)
    {
        // $id = Yii::$app->request->get($id);
                
        $category = Category::findOne($id);
        $items = ProductItems::find()->all();
        if(empty($category))
            throw new \yii\web\HttpException(404, 'Такой категории нет');
        $query = Product::find()->where(['category_id'=> $id]);
        $totalCount = $query->count();
        $pages = new Pagination(['totalCount'=>$query->count(), 'pageSize'=>1,'forcePageParam'=>false,'pageSizeParam'=>false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('view',compact('products','category','pages','totalCount','items'));
    } 
    public function actionSearch()
    {
        
        $q = trim(Yii::$app->request->get('q')); 
        if(!$q)
            return $this->render('search',compact('q'));       
        $query = Product::find()->where(['like','name_uz',$q]);
        $totalCount = $query->count();
        $pages = new Pagination(['totalCount'=>$query->count(), 'pageSize'=>1,'forcePageParam'=>false,'pageSizeParam'=>false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();           
        return $this->render('search',compact('products','pages','totalCount','q'));

    }  
    
    protected function findModel($id)
    {
        if (($model = Category::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
}

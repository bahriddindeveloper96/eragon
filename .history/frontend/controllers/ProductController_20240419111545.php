<?php

namespace frontend\controllers;

use common\models\Product;
use common\models\ProductSearch;
use common\models\Stock;
use common\models\Photo;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\ProductValue;
use common\models\Model;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;
use Exception;
use Yii;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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
     * Lists all Product models.
     *
     * @return string
     */
    

    public function actionIndex()
    {        
        $products = Product::find()->all();

        return $this->render('index', [
            'products' => $products,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionView($id)
    // {
    //     return $this->render('view', [
    //         'model' => $this->findModel($id),
    //     ]);
    // }
    public function actionView($id)
    {
        // Find the category model with the provided ID
        //$model = $this->findModel($id);
        $relateds = Product::find()->all();
        $product = Product::findOne($id);
        if(empty($product))
            throw new \yii\web\HttpException(404, 'Такой товаров нет');
        return $this->render('view', [
            'product' => $product,
            'relateds' => $relateds,
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Product::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionSetLanguage($lang)
    {
        $langs = ['en', 'ru', 'uz']; // O'zgartirildi: 'uz' tilini qo'shish

        if (in_array($lang, $langs)) {
            \Yii::$app->language = $lang;
            Yii::$app->session->set('app_lang', $lang);
            $cookies = Yii::$app->response->cookies;
            $cookies->add(new \yii\web\Cookie([
                'name' => 'language',
                'value' => $lang,
            ]));
        }       

        return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
    }
}

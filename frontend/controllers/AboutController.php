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
class AboutController extends Controller
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
     * Lists all Product models.
     *
     * @return string
     */
    

    public function actionIndex()
    {        
        $products = Product::find()->all();

        return $this->render('home', [
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
        $model = $this->findModel($id);
        return $this->render('view', [
            'model' => $model,
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Product::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

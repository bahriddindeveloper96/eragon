<?php

namespace frontend\controllers;

use common\models\Category;
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
        // Find the category model with the provided ID
        $model = $this->findModel($id);

        // Load the related category attributes
        $categoryAttributes = $model->categoryAttributes;

        if ($model === null) {
            throw new NotFoundHttpException('The requested category does not exist.');
        }

        // Render the view page with the category model and its associated attributes
        return $this->render('view', [
            'model' => $model,
            'categoryAttributes' => $categoryAttributes,
        ]);
    }
    
    protected function findModel($id)
    {
        if (($model = Category::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

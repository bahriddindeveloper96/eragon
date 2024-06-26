<?php

namespace backend\controllers;

use common\models\ProductValue;
use common\models\ProductValueSearch;
use common\models\CategoryAttribute;
use common\models\CategoryAttributeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Model;
use Yii;    

/**
 * ProductValueController implements the CRUD actions for ProductValue model.
 */
class ProductValueController extends Controller
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
     * Lists all ProductValue models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProductValueSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProductValue model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ProductValue model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    // public function actionCreate()
    // {
    //     $model = new ProductValue();

    //     if ($this->request->isPost) {
    //         if ($model->load($this->request->post()) && $model->save()) {
    //             return $this->redirect(['view', 'id' => $model->id]);
    //         }
    //     } else {
    //         $model->loadDefaultValues();
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }
    public function actionCreate()
    {
       // $model = new CategoryAttribute();
        $modelsPrevent = [new ProductValue];        
        if (Yii::$app->request->post()) {

            $modelsPrevent = Model::createMultiple(ProductValue::classname(),  $modelsPrevent);
            Model::loadMultiple($modelsPrevent, $this->request->post());

            foreach ($modelsPrevent as $index => $modelOptionValue) { 
            }
            if (Model::validateMultiple($modelsPrevent)) {
                $transaction = Yii::$app->db->beginTransaction();
                try {
                    foreach ($modelsPrevent as $key => $product) {                        
                      //  $product->instructions_id = $id;
                        $product->save(false);
                    }
                    $transaction->commit();
                    return $this->redirect(['index']);
                } catch (Exception $e) {
                    $transaction->rollBack();
                    throw $e;
                }
            }
        }

        return $this->render('create', [
            'modelsPrevent' =>  $modelsPrevent,
           // 'company' => $company,
        ]);
    }

    /**
     * Updates an existing ProductValue model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ProductValue model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProductValue model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return ProductValue the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProductValue::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

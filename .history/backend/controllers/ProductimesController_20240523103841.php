<?php

namespace backend\controllers;

use common\models\ProductItems;
use common\models\Product;
use common\models\ProductItemsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Stock;
use common\models\Color;
use common\models\ProductValue;
use common\models\Photo;
use common\models\Model;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;
use Exception;
use Yii;

/**
 * ProductimesController implements the CRUD actions for ProductItems model.
 */
class ProductimesController extends Controller
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
     * Lists all ProductItems models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProductItemsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProductItems model.
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
     * Creates a new ProductItems model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($id)
{
    $product = Product::findOne($id);
    $model = new ProductItems();
    $stock = new Stock();
    $color = new Color();
    $modelsPrevent = [new ProductValue()];
    $modelsPhoto = [new Photo()];
    $post = Yii::$app->request->post();   

    if ($this->request->isPost) {
        $transaction = Yii::$app->db->beginTransaction();
        try {
            if ($model->load($post)) {
                // Set updated_by attribute to created_by before saving
                $model->created_by = $product->created_by;
                $model->updated_by = $product->created_by;
                

                if ($model->save()) {
                    // Save Stock
                    if($stock->load($post)){
                        $stock->product_items_id = $model->id;
                        if (!$stock->save()) {
                            throw new \Exception('Failed to save stock.');
                        }
                    }
                     

                    // Save Product Values
                    $modelsPrevent = Model::createMultiple(ProductValue::className(), $modelsPrevent);
                    Model::loadMultiple($modelsPrevent, $post);

                    foreach ($modelsPrevent as $index => $modelOptionValue) {
                        $modelOptionValue->product_id = $model->id;
                        if (!$modelOptionValue->save(false)) {
                            throw new \Exception('Failed to save product values.');
                        }
                    }
            
                    if (Model::validateMultiple($modelsPrevent)) {
                        $transaction = Yii::$app->db->beginTransaction();
                        try {
                            // Save CategoryAttribute models
                            foreach ($modelsPrevent as $product) {                        
                                $product->save(false);
                            }
                            $transaction->commit();
                        //   return $this->redirect(['index']);
                        } catch (Exception $e) {
                            $transaction->rollBack();
                            throw $e;
                        }
                        }
                    } else {
                        // Handle the case when Category model fails to save
                        // You can log the error or perform any other actions here
                        Yii::error('Failed to save the Category model.');
                    }
                   
                     
                    
                    // Save Photos
                    $modelsPhoto = Model::createMultiple(Photo::className(), $modelsPhoto);
                    Model::loadMultiple($modelsPhoto, $post);

                    foreach ($modelsPhoto as $index => $modelValue) {
                        $modelValue->product_items_id = $model->id;
                        $modelValue->created_by = $product->created_by;
                        $modelValue->updated_by = $product->created_by;

                        $modelValue->s_photo = UploadedFile::getInstance($modelValue, "[{$index}]photo");
                        if ($modelValue->s_photo) {
                            $modelValue->photo = $modelValue->s_photo->name;
                        }

                        if (!$modelValue->save(false)) {
                            throw new \Exception('Failed to save photos.');
                        }
                    }
                    

                    $transaction->commit();
                    return $this->redirect(['index']);
                } else {
                    throw new \Exception('Failed to save product items.');
                }
            } else {
                throw new \Exception('Failed to load post data.');
            }
        } catch (\Exception $e) {
            $transaction->rollBack();
            Yii::error($e->getMessage());
            // Handle the error appropriately here
        }
    }
    

    return $this->render('create', [
        'modelsPrevent' => $modelsPrevent,
        'modelsPhoto' => $modelsPhoto,
        'model' => $model,
        'stock' => $stock,
        'product' => $product,
        'color' => $color,
    ]);
}
    

    /**
     * Updates an existing ProductItems model.
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
     * Deletes an existing ProductItems model.
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
     * Finds the ProductItems model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return ProductItems the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProductItems::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

<?php

namespace backend\controllers;

use common\models\Product;
use common\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\ProductValue;
use common\models\Model;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
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

        // Load the related category attributes
        $productValues = $model->productValues;

        if ($model === null) {
            throw new NotFoundHttpException('The requested category does not exist.');
        }

        // Render the view page with the category model and its associated attributes
        return $this->render('view', [
            'model' => $model,
            'productValues' => $productValues,
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    // public function actionCreate()
    // {
    //     $model = new Product();

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
        $model = new Product();
        $modelsPrevent = [new ProductValue()];   
        $post = Yii::$app->request->post();
    
        if ($this->request->isPost) {       
            if ($model->load($post)) {
                // Set updated_by attribute to created_by before saving
                $model->updated_by = $model->created_by;           
                if ($model->save()) {
                   
                 }            
                // Load CategoryAttribute models with POST data
                $modelsPrevent = Model::createMultiple(ProductValue::className(),  $modelsPrevent);
                Model::loadMultiple($modelsPrevent, $post);
    
                // Loop through loaded models
                foreach ($modelsPrevent as $index => $modelOptionValue) {               
                    $modelOptionValue->product_id = $model->id; // Set category_id accordingly
                }
    
                // Validate CategoryAttribute models
                if (Model::validateMultiple($modelsPrevent)) {
                    $transaction = Yii::$app->db->beginTransaction();
                    try {
                        // Save CategoryAttribute models
                        foreach ($modelsPrevent as $product) {                        
                            $product->save(false);
                        }
                        $transaction->commit();
                        return $this->redirect(['index']);
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
        }
        
        return $this->render('create', [
            'modelsPrevent' =>  $modelsPrevent,
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionUpdate($id)
    // {
    //     $model = $this->findModel($id);

    //     if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }

    //     return $this->render('update', [
    //         'model' => $model,
    //     ]);
    // }
    public function actionUpdate($id)
    {
        // Find the existing category model with the provided ID
        $model = Product::findOne($id);
        if ($model === null) {
            throw new NotFoundHttpException('The requested category does not exist.');
        }

        // Load associated attributes for the existing category
        $modelsPrevent = $model->productValues;

        $post = Yii::$app->request->post();

        if ($model->load($post)) {
            // Set updated_by attribute to created_by before saving
            $model->updated_by = $model->created_by;
            if ($model->save()) {
                
            } 

            // Store the IDs of existing category attributes
            $oldIDs = ArrayHelper::map($modelsPrevent, 'id', 'id');

            // Load CategoryAttribute models with POST data
            $modelsPrevent = Model::createMultiple(ProductValue::class, $modelsPrevent);
            Model::loadMultiple($modelsPrevent, $post);

            // Loop through loaded models and set category_id accordingly
            foreach ($modelsPrevent as $modelOptionValue) {
                $modelOptionValue->product_id = $model->id;
            }

            // Validate CategoryAttribute models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsPrevent) && $valid;

            if ($valid) {
                $transaction = Yii::$app->db->beginTransaction();
                try {
                    // Save CategoryAttribute models
                    foreach ($modelsPrevent as $product) {
                        if (!$product->save(false)) {
                            throw new Exception('Failed to save category attribute.');
                        }
                    }

                    // Delete removed category attributes
                    $newIDs = ArrayHelper::map($modelsPrevent, 'id', 'id');
                    $deletedIDs = array_diff($oldIDs, $newIDs);
                    if (!empty($deletedIDs)) {
                        ProductValue::deleteAll(['id' => $deletedIDs]);
                    }

                    // Commit the transaction
                    $transaction->commit();

                    // Redirect to index page after successful update
                    return $this->redirect(['index']);
                } catch (Exception $e) {
                    // Rollback the transaction and re-throw the exception
                    $transaction->rollBack();
                    throw $e;
                }
            }
        }

        // Render the update view with the model and associated attributes
        return $this->render('update', [
            'modelsPrevent' =>  $modelsPrevent,
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Product model.
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
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

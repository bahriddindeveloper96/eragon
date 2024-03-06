<?php

namespace backend\controllers;

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
        $productPhotos = $model->photos;

        if ($model === null) {
            throw new NotFoundHttpException('The requested category does not exist.');
        }

        // Render the view page with the category model and its associated attributes
        return $this->render('view', [
            'model' => $model,
            'productValues' => $productValues,        
            'productPhotos' => $productPhotos,
        ]);
    }

  
    public function actionCreate()
{
    $model = new Product();
    $stock = new Stock();
    $modelsPrevent = [new ProductValue()];
    $modelsPhoto = [new Photo()];
    $post = Yii::$app->request->post();   

    if ($this->request->isPost) {       
        if ($model->load($post)) {
            // Set updated_by attribute to created_by before saving
            $model->updated_by = $model->created_by;                       
            if ($model->save()) {
               
             } 
             if($stock->load($post)){
                 $stock->product_id = $model->id;                       
                if ($stock->save()) {
                
                } 
             } 
        
             $modelsPrevent = Model::createMultiple(ProductValue::className(),  $modelsPrevent);
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
            $modelsPhoto = Model::createMultiple(Photo::className(),  $modelsPhoto);
            Model::loadMultiple($modelsPhoto, $post);

            foreach ($modelsPhoto as $index => $modelValue) {
                $modelValue->product_id = $model->id;
                $modelValue->created_by = $model->created_by;
                $modelValue->updated_by = $model->updated_by;
                $modelValue->s_photo = UploadedFile::getInstance($modelValue, "[{$index}]photo");                
                if ($modelValue->s_photo) {
                    $modelValue->photo = $modelValue->s_photo->name;
                } 
 
                //$modelValue->product_id = $model->id;
                if (!$modelValue->save(false)) {
                    throw new \Exception('Failed to save photos.');
                }
            }
            if (Model::validateMultiple($modelsPhoto)) {
                $transaction = Yii::$app->db->beginTransaction();
                try {
                    // Save CategoryAttribute models
                    foreach ($modelsPhoto as $photo) {                        
                        $photo->save(false);
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

    return $this->render('create', [
        'modelsPrevent' => $modelsPrevent,
        'modelsPhoto' => $modelsPhoto,
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
    // Find the existing product model with the provided ID
    $model = Product::findOne($id);
    if ($model === null) {
        throw new NotFoundHttpException('The requested product does not exist.');
    }

    // Load associated attributes and photos for the existing product
    $modelsPrevent = $model->productValues;
    $modelsPhoto = $model->photos;

    $post = Yii::$app->request->post();

    if ($model->load($post)) {
        // Set updated_by attribute to created_by before saving
        $model->updated_by = $model->created_by;

        // Start a transaction to ensure data consistency
        $transaction = Yii::$app->db->beginTransaction();
        try {
            // Save the updated product model
            if (!$model->save()) {
                throw new Exception('Failed to update product.');
            }

            // Update product values
            $this->updateRelatedModels($modelsPrevent, $post, ProductValue::class, 'product_id', $model->id);

            // Update photos
            $this->updateRelatedModels($modelsPhoto, $post, Photo::class, 'product_id', $model->id);

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

    // Render the update view with the model and associated attributes
    return $this->render('update', [
        'model' => $model,
        'modelsPrevent' => $modelsPrevent,
        'modelsPhoto' => $modelsPhoto,
    ]);
}

/**
 * Update related models (e.g., product values or photos).
 * 
 * @param array $models Array of related models
 * @param array $post POST data
 * @param string $className Related model class name
 * @param string $relationKey Name of the foreign key attribute in the related model
 * @param mixed $relationValue Value of the foreign key attribute
 * @throws Exception If saving related models fails
 */
private function updateRelatedModels($models, $post, $className, $relationKey, $relationValue)
{
    // Store the IDs of existing related models
    $oldIDs = ArrayHelper::map($models, 'id', 'id');

    // Load related models with POST data
    $models = Model::createMultiple($className, $models);
    Model::loadMultiple($models, $post);

    // Loop through loaded models and set the relation attribute accordingly
    foreach ($models as $model) {
        $model->{$relationKey} = $relationValue;
    }

    // Validate related models
    $valid = Model::validateMultiple($models);
    if (!$valid) {
       // throw new Exception('Validation failed for related models.');
    }

    // Save related models
    foreach ($models as $model) {
        if (!$model->save(false)) {
        //    throw new Exception('Failed to save related model.');
        }
    }

    // Delete removed related models
    $newIDs = ArrayHelper::map($models, 'id', 'id');
    $deletedIDs = array_diff($oldIDs, $newIDs);
    if (!empty($deletedIDs)) {
        $className::deleteAll(['id' => $deletedIDs]);
    }
}

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

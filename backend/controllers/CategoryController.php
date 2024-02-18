<?php

namespace backend\controllers;

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
    public function actionIndex()
    {
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Category model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
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

    /**
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    // public function actionCreate()
    // {
    //     $model = new Category();

    //     if ($this->request->isPost) {
    //         if ($model->load($this->request->post())) {
    //             // Assign the value of created_by to updated_by before saving
    //             $model->updated_by = $model->created_by;
    
    //             if ($model->save()) {
    //                 return $this->redirect(['view', 'id' => $model->id]);
    //             }
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
    $model = new Category();
    $modelsPrevent = [new CategoryAttribute()];   
    $post = Yii::$app->request->post();

    if ($this->request->isPost) {       
        if ($model->load($post)) {
            // Set updated_by attribute to created_by before saving
            $model->updated_by = $model->created_by;           
            if ($model->save()) {
               
             }            
            // Load CategoryAttribute models with POST data
            $modelsPrevent = Model::createMultiple(CategoryAttribute::className(),  $modelsPrevent);
            Model::loadMultiple($modelsPrevent, $post);

            // Loop through loaded models
            foreach ($modelsPrevent as $index => $modelOptionValue) {               
                $modelOptionValue->category_id = $model->id; // Set category_id accordingly
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

public function actionUpdate($id)
{
    // Find the existing category model with the provided ID
    $model = Category::findOne($id);
    if ($model === null) {
        throw new NotFoundHttpException('The requested category does not exist.');
    }

    // Load associated attributes for the existing category
    $modelsPrevent = $model->categoryAttributes;

    $post = Yii::$app->request->post();

    if ($model->load($post)) {
        // Set updated_by attribute to created_by before saving
        $model->updated_by = $model->created_by;
        if ($model->save()) {
               
        } 

        // Store the IDs of existing category attributes
        $oldIDs = ArrayHelper::map($modelsPrevent, 'id', 'id');

        // Load CategoryAttribute models with POST data
        $modelsPrevent = Model::createMultiple(CategoryAttribute::class, $modelsPrevent);
        Model::loadMultiple($modelsPrevent, $post);

        // Loop through loaded models and set category_id accordingly
        foreach ($modelsPrevent as $modelOptionValue) {
            $modelOptionValue->category_id = $model->id;
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
                    CategoryAttribute::deleteAll(['id' => $deletedIDs]);
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
     * Updates an existing Category model.
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

    /**
     * Deletes an existing Category model.
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
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

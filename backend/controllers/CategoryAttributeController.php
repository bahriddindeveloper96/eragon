<?php

namespace backend\controllers;

use common\models\CategoryAttribute;
use common\models\CategoryAttributeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Model;
use Yii;

/**
 * CategoryAttributeController implements the CRUD actions for CategoryAttribute model.
 */
class CategoryAttributeController extends Controller
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
     * Lists all CategoryAttribute models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CategoryAttributeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CategoryAttribute model.
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
     * Creates a new CategoryAttribute model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
       // $model = new CategoryAttribute();
        $modelsPrevent = [new CategoryAttribute];

        // if ($this->request->isPost) {
        //     if ($model->load($this->request->post()) && $model->save()) {
        //         return $this->redirect(['view', 'id' => $model->id]);
        //     }
        // } else {
        //     $model->loadDefaultValues();
        // }
        if (Yii::$app->request->post()) {

            $modelsPrevent = Model::createMultiple(CategoryAttribute::classname(),  $modelsPrevent);
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
    public function actionLettersCreate($id)
    {
        $id = Yii::$app->request->get('id');
        $company = Company::findOne(['control_instruction_id' => $id]);
        $modelsPrevent = [new CautionLetters];

        if (Yii::$app->request->post()) {

            $modelsPrevent = Model::createMultiple(CautionLetters::classname(),  $modelsPrevent);
            Model::loadMultiple($modelsPrevent, $this->request->post());

            foreach ($modelsPrevent as $index => $modelOptionValue) {
                $modelOptionValue->updated_by = $modelOptionValue->created_by;
                $modelOptionValue->s_file = UploadedFile::getInstance($modelOptionValue, "[{$index}]file");                
                if($modelOptionValue->s_file)  {
                    $modelOptionValue->file = $modelOptionValue->s_file->name;
                }   
                
            }
            if (Model::validateMultiple($modelsPrevent)) {
                $transaction = Yii::$app->db->beginTransaction();
                try {
                    foreach ($modelsPrevent as $key => $product) {                        
                        $product->instructions_id = $id;
                        $product->save(false);
                    }
                    $transaction->commit();
                    return $this->redirect(['letters-add','instructions_id'=> $id]);
                } catch (Exception $e) {
                    $transaction->rollBack();
                    throw $e;
                }
            }
        }

        return $this->render('letters-create', [
            'modelsPrevent' =>  $modelsPrevent,
            'company' => $company,
        ]);
    }

    /**
     * Updates an existing CategoryAttribute model.
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
     * Deletes an existing CategoryAttribute model.
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
     * Finds the CategoryAttribute model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return CategoryAttribute the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CategoryAttribute::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

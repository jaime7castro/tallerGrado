<?php

class ServicioGuardiaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','viewRG'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','createRG','updateRG'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','deleteRG'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ServicioGuardia;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ServicioGuardia']))
		{
			$model->attributes=$_POST['ServicioGuardia'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ServicioGuardia']))
		{
			$model->attributes=$_POST['ServicioGuardia'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ServicioGuardia');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ServicioGuardia('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ServicioGuardia']))
			$model->attributes=$_GET['ServicioGuardia'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ServicioGuardia the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ServicioGuardia::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ServicioGuardia $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='servicio-guardia-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        /////////////////Controlador para el ROL DE GUARDI//////////////////
        public function actionViewRG($id){
            $modelRG= RolGuardia::model();         
            $model=$modelRG->findAllByAttributes(array('ServicioGuardia_id'=>$id));
            $this->render('viewRG',array('model'=>$model,'id'=>$id));
        }
        
        public function actionUpdateRG($id){
            $model= RolGuardia::model()->findByPk($id);
            if(isset($_POST['RolGuardia']))
            {
                $model->attributes=$_POST['RolGuardia'];
                if($model->save())
                    $this->redirect(array('viewRG','id'=>$model->ServicioGuardia_id));
            }       
            $this->render('updateRG',array('model'=>$model));
        }
        
        public function actionCreateRG($id){
            $model=  new RolGuardia();
            if(isset($_POST['RolGuardia'])){
                $model->attributes=$_POST['RolGuardia'];
                if($model->save())
                    $this->redirect(array('viewRG','id'=>$model->ServicioGuardia_id));
            }       
            $this->render('createRG',array('model'=>$model,'id'=>$id));
        }
        
        public function actionDeleteRG($id){
            $model= RolGuardia::model()->findByPk($id);
            $model->delete();
            $this->redirect(array('viewRG','id'=>$model->ServicioGuardia_id));
        }
}

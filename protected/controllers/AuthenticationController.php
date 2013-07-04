<?php

class AuthenticationController extends Controller
{
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
	public $defaultAction = 'login';
	
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionLogin()
	{
	   $this->layout = 'wow';
	   if(Yii::app()->user->id === null) { 		
			$model=new LoginForm;
			$model->rememberMe = false;

			// if it is ajax validation request
			if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
			{
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}

			// collect user input data
			if(isset($_POST['LoginForm']))
			{
				$model->attributes=$_POST['LoginForm'];
				// validate user input and redirect to the previous page if valid
				if($model->validate() && $model->login()){
					Yii::app()->user->returnUrl = Yii::app()->user->returnUrl."?r=authentication/index";
					$this->redirect(Yii::app()->user->returnUrl);
				}else
				   $model->rememberMe = true;
			}
			// display the login form
			$this->render('login',array('model'=>$model));
		} else {
			Yii::app()->user->returnUrl = Yii::app()->user->returnUrl."?r=authentication/index";
			$this->redirect(Yii::app()->user->returnUrl);
		}
	}
	
   public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}

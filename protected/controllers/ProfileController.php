<?php

class ProfileController extends Controller
{
	public function actionIndex()
	{
		
	}

	public function actionInfo()
	{
		$model = new IptvProfile;
		$criteria=new CDbCriteria;
		$criteria->select='profile';
		$criteria->condition='id_prof=:postID';
		$criteria->params=array(':postID'=>1);
		$profile= $model->find($criteria);
		$this->render('info', array('profile'=>$profile,'model'=>$model));
	}
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
}
<?php

class ProfileController extends Controller
{
	public function actionIndex()
	{
		
	}

	public function actionInfo()
	{
		$model = new IptvProfile;
		$profile = $model->findByPk(1);
		$this->render('info', array('profile'=>$profile,'model'=>$model));
	}

	public function actionEditInfo()
	{
		$model = new IptvProfile;
		$profile = $model->findByPk(1);
		if(isset($_POST["IptvProfile"])) {
				$content = $_POST["IptvProfile"];
				$profile->profile = $content['profile'];
				$profile->save();
               	$this->redirect('index.php?r=profile/info', array('profile'=>$profile,'model'=>$model));
		} else {
			$this->render('editinfo', array('profile'=>$profile,'model'=>$model));
		}
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
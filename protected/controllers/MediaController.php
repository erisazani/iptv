<?php

class MediaController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionTv()
	{
		$model = IptvTv::model();
		$data = $model->getAllTvs();

		$arr = array();
		foreach($data as $r) {
			$arr[$r->id_tv] = $r->attributes;
		}
		$this->render('tv', array('data' => $arr));
	}	

	public function actionVideo()
	{
		$model = IptvVid::model();
		$data = $model->getAllVideos();

		$arr = array();
		foreach($data as $r) {
			$arr[$r->id_vid] = $r->attributes;
		}
		$this->render('video', array('data' => $arr));
	}

	public function actionLibrary()
	{
		$this->render('library');
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
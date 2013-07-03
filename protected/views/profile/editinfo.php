<?php
/* @var $this ProfileController */
$this->pageTitle=Yii::app()->name . ' - Edit HotelProfile';
$this->breadcrumbs=array(
	'Profile',
);
?>

<html>
	<head>
	</head>
	<body>
		<p>
			<h1>Edit Info Profile</h1>
			<?php
				if(Yii::app()->user->id == "contadmin") { 
			?>
			<div class="form">
			<?php 
				$formedit = $this->beginWidget('CActiveForm'); 
			?>
			 
			    <div>
			        <?php echo CHtml::activeLabel($model,'profile'); ?>
			        <br/>
			        <?php echo CHtml::activeTextArea($model,'profile', array('rows'=>20,'cols'=>125, 'value'=>$profile['profile'])) ?>
			    </div>
			    <div>
			        <?php echo CHtml::submitButton('Save'); ?>
			    </div>
			<?php $this->endWidget(); ?>
			</div>
			<?php 
				}
			?>
		</p>
	</body>
</html>


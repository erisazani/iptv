<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>


<div class="content">

<h1>Login</h1>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'htmlOptions'=>array(
        'class'=>'buttonless-form',
    ),
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>


	<ul class="field-set field-set-stacked">
        <li class="field field-text">
		      <?php echo $form->labelEx($model,'username'); ?>
		      <?php echo $form->textField($model,'username',array('class' => 'input-text large')); ?>
		      <?php echo $form->error($model,'username'); ?>
	     </li>
	     
        <li class="field">
		      <?php echo $form->labelEx($model,'password'); ?>
		      <?php echo $form->passwordField($model,'password',array('class' => 'input-password large submit')); ?>
		      <?php echo $form->error($model,'password'); ?>
	     </li>
   </ul>
	<?php echo CHtml::submitButton('Login', array('class' => 'input-submit')); ?>
	
	<?php $this->endWidget(); ?>
	
</div><!-- form -->

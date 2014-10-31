<?php
/* @var $this CuentaUsuarioController */
/* @var $model CuentaUsuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cuenta-usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreUsuario'); ?>
		<?php echo $form->textField($model,'nombreUsuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrasena'); ?>
		<?php echo $form->textField($model,'contrasena',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'contrasena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preguntaSeg'); ?>
		<?php echo $form->textField($model,'preguntaSeg',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'preguntaSeg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'respuestaSeg'); ?>
		<?php echo $form->textField($model,'respuestaSeg',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'respuestaSeg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Persona_codigo'); ?>
		<?php echo $form->textField($model,'Persona_codigo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Persona_codigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
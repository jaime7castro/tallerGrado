<?php
/* @var $this PuestoGuardiaController */
/* @var $model PuestoGuardia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'puesto-guardia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con (<span class="required">*</span>) son requeridos.</p>
        <br>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'abreviatura'); ?>
		<?php echo $form->textField($model,'abreviatura',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'abreviatura'); ?>
	</div>
        <br>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Editar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
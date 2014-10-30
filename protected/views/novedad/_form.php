<?php
/* @var $this NovedadController */
/* @var $model Novedad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'novedad-form',
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
		<?php echo $form->labelEx($model,'ServicioGuardia_id'); ?>
		<?php echo $form->dropDownList($model,'ServicioGuardia_id',CHtml::listData(ServicioGuardia::model()->findAll(),'id','fecha')); ?>
		<?php echo $form->error($model,'ServicioGuardia_id'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detalle'); ?>
		<?php echo $form->textArea($model,'detalle',array('rows'=>10,'cols'=>80,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'detalle'); ?>
	</div>

	<br>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Editar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
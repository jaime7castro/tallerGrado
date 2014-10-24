<?php
/* @var $this MaterialEquipoController */
/* @var $model MaterialEquipo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'material-equipo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con (<span class="required">*</span>) son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <div class="row" hidden="true">
		<?php echo $form->labelEx($model,'Unidad_codigo'); ?>
		<?php echo $form->dropDownList($model,'Unidad_codigo',CHtml::listData(Unidad::model()->findAll(),'codigo','descripcion')); ?>
		<?php echo $form->error($model,'Unidad_codigo'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->dropDownList($model,'tipo',array('Interno'=>'Interno','Activo Fijo'=>'Activo Fijo')); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detalle'); ?>
		<?php echo $form->textField($model,'detalle',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'detalle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Editar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this DetalleGrupoGuardiaController */
/* @var $model DetalleGrupoGuardia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'GrupoGuardia_id'); ?>
		<?php echo $form->textField($model,'GrupoGuardia_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Persona_codigo'); ?>
		<?php echo $form->textField($model,'Persona_codigo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(' Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
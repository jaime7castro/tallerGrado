<?php
/* @var $this AlcanceAvisoController */
/* @var $model AlcanceAviso */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Aviso_id'); ?>
		<?php echo $form->textField($model,'Aviso_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Clase_id'); ?>
		<?php echo $form->textField($model,'Clase_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
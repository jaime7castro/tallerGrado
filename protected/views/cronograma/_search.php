<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dia'); ?>
		<?php echo $form->dropDownList($model,'dia',array('Lunes'=>'Lunes','Martes'=>'Martes','Miercoles'=>'Miercoles',
                            'Jueves'=>'Jueves','Viernes'=>'Viernes','Sabado'=>'Sabado','Domingo'=>'Domingo'));?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>10,'maxlength'=>10)); ?>
	</div>

        <?php /*
	<div class="row">
		<?php echo $form->label($model,'Unidad_codigo'); ?>
		<?php echo $form->textField($model,'Unidad_codigo',array('size'=>45,'maxlength'=>45)); ?>
	</div> */?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php
/* @var $this AvisoController */
/* @var $model Aviso */
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
		<?php echo $form->label($model,'tipoAviso'); ?>
		<?php echo $form->dropDownList($model,'tipoAviso',array(''=>'--Seleccione--','Disposicion'=>'Disposición',
                    'Comunicado'=>'Comunicado','Consigna'=>'Consigna')); ?>
	</div>
    
        <div class="row">
		<?php echo $form->label($model,'Código de la Persona'); ?>
		<?php echo $form->textField($model,'Persona_codigo',array('size'=>10,'maxlength'=>45)); ?>
	</div>
    
        <div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>3, 'cols'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaInicio'); ?>
		<?php echo $form->textField($model,'fechaInicio',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaFin'); ?>
		<?php echo $form->textField($model,'fechaFin',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>3, 'cols'=>30)); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php
$this->breadcrumbs=array(
	'Cronograma'=>array('index'),
         $id=>array('viewACT','id'=>$id),
        'Nueva Actividad'
);

$this->menu=array(
        array('label'=>'Ver Actividades', 'url'=>array('viewACT', 'id'=>$id)),
);
?>	
<h2>Nueva Actividad</h2>

<div class="form">

<?php
    $form=$this->beginWidget('CActiveForm');?>

<p class="note">Los campos (<span class="required">*</span>) son requeridos.</p>

        <br>
        <div class="row" hidden="true">
		<?php echo $form->labelEx($model,'Cronograma_id'); ?>
		<?php echo $form->dropDownList($model,'Cronograma_id',array($id=>$id)); ?>
		<?php echo $form->error($model,'Cronograma_id'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'TipoActividad_id'); ?>
		<?php echo $form->dropDownList($model,'TipoActividad_id',CHtml::listData(TipoActividad::model()->findAll(),'id','descripcion')); ?>
		<?php echo $form->error($model,'TipoActividad_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaInicio'); ?>
		<?php echo $form->textField($model,'horaInicio',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'horaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaFin'); ?>
		<?php echo $form->textField($model,'horaFin',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'horaFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detalle'); ?>
		<?php echo $form->textArea($model,'detalle',array('cols'=>70,'rows'=>3,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'detalle'); ?>
	</div>

	
        <br>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>

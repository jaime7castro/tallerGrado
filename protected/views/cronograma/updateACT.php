
<?php
$this->breadcrumbs=array(
	'Cronograma'=>array('index'),
         $model->Cronograma_id=>array('viewACT','id'=>$model->Cronograma_id),
        'Editar Actividad'
);
$this->menu=array(
        array('label'=>'Ver Actividades', 'url'=>array('viewACT', 'id'=>$model->Cronograma_id)),
);
?>

<h2>Editar las Actividades del Cronograma</h2>

<div class="form">
    
<?php
    $form=$this->beginWidget('CActiveForm');?>
        
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
		<?php echo $form->textArea($model,'detalle',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'detalle'); ?>
	</div>	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Editar'); ?>
	</div>

<?php
    $this->endWidget();
?>
</div>


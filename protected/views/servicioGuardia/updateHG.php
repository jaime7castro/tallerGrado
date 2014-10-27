
<?php
$this->breadcrumbs=array(
	'Servicio de Guardia'=>array('index'),
         $model->ServicioGuardia_id=>array('viewHG','id'=>$model->ServicioGuardia_id),
        'Editar Horario de Guardia'
);
$this->menu=array(
        array('label'=>'Ver Horario de Guardia', 'url'=>array('viewHG', 'id'=>$model->ServicioGuardia_id)),
);
?>

<h1>Editar Horario de Guardia</h1>

<div class="form">
    
<?php
    $form=$this->beginWidget('CActiveForm');?>
        
        <?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->labelEx($model,'Persona'); ?>               
		<?php echo $form->dropDownList($model,'Persona_codigo',CHtml::listData(Persona::model()->findAll(),"codigo","fullname"),array('prompt'=>'Seleccione...')); ?>
		<?php echo $form->error($model,'Persona_codigo'); ?>
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
		<?php echo $form->labelEx($model,'PuestoGuardia_id'); ?>
		<?php echo $form->dropDownList($model,'PuestoGuardia_id',CHtml::listData(PuestoGuardia::model()->findAll(),'id','descripcion')); ?>
		<?php echo $form->error($model,'PuestoGuardia_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Editar'); ?>
	</div>

<?php
    $this->endWidget();
?>
</div>


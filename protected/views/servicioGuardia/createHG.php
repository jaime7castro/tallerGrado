<?php
$this->breadcrumbs=array(
	'Servicio de Guardia'=>array('index'),
         $id=>array('viewHG','id'=>$id),
        'Nuevo Horario de Guardia'
);

$this->menu=array(
        array('label'=>'Ver Horario de Guardia', 'url'=>array('viewHG', 'id'=>$id)),
);
?>	
<h1>Nuevo Horario de Guardia</h1>

<div class="form">

<?php
    $form=$this->beginWidget('CActiveForm');?>

<p class="note">Los campos (<span class="required">*</span>) son requeridos.</p>
        <br>
        <?php echo $form->errorSummary($model); ?>

	<div class="row" hidden="true">
		<?php echo $form->labelEx($model,'ServicioGuardia_id'); ?>
		<?php echo $form->dropDownList($model,'ServicioGuardia_id',array($id=>$id)); ?>
		<?php echo $form->error($model,'ServicioGuardia_id'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'Persona'); ?>               
		<?php echo $form->dropDownList($model,'Persona_codigo',CHtml::listData(Persona::model()->findAll(),"codigo","fullname2"),array('prompt'=>'Seleccione...')); ?>
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
        <br>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>

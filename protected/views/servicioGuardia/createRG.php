<?php
$this->breadcrumbs=array(
	'Servicio de Guardia'=>array('index'),
         $id=>array('viewRG','id'=>$id),
        'Nuevo Rol de Guardia'
);

$this->menu=array(
        array('label'=>'Ver Rol de Guardia', 'url'=>array('viewRG', 'id'=>$id)),
);
?>	
<h1>Nuevo Rol de Guardia</h1>

<div class="form">

<?php
    $form=$this->beginWidget('CActiveForm');?>

<p class="note">Los campos (<span class="required">*</span>) son requeridos.</p>

        <?php echo $form->errorSummary($model); ?>

        <div class="row" hidden="true">
		<?php echo $form->labelEx($model,'ServicioGuardia_id'); ?>
		<?php echo $form->dropDownList($model,'ServicioGuardia_id',array($id=>$id)); ?>
		<?php echo $form->error($model,'ServicioGuardia_id'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'Persona'); ?>               
		<?php echo $form->dropDownList($model,'Persona_codigo',CHtml::listData(Persona::model()->findAll(),"codigo","fullname"),array('prompt'=>'Seleccione...')); ?>
		<?php echo $form->error($model,'Persona_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargoGuardia'); ?>
		<?php echo $form->dropDownList($model,'cargoGuardia',array('Jefe de Ronda'=>'Jefe de Ronda',
                    'Oficial de Guardia'=>'Oficial de Guardia','Oficial de Servicio'=>'Oficial de Servicio',
                    'Sargento de Guardia'=>'Sargento de Guardia','Cabo 1er Cuarto'=>'Cabo 1er Cuarto',
                    'Cabo 2do Cuarto'=>'Cabo 2do Cuarto','Medico de Turno'=>'Médico de Turno',
                    'Operador de Servivio'=>'Operador de Servicio','Corneta de Servicio'=>'Corneta de Servicio',
                    'Chofer de Servicio'=>'Chofer de Servicio')); ?>
            
		<?php echo $form->error($model,'cargoGuardia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>

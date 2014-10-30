
<?php
$this->breadcrumbs=array(
	'Servicio de Guardia'=>array('index'),
         $model->ServicioGuardia_id=>array('viewRG','id'=>$model->ServicioGuardia_id),
        'Editar Rol de Guardia'
);
$this->menu=array(
        array('label'=>'Ver Rol de Guardia', 'url'=>array('viewRG', 'id'=>$model->ServicioGuardia_id)),
);
?>

<h1>Editar el Rol de Guardia</h1>

<div class="form">
    
<?php
    $form=$this->beginWidget('CActiveForm');?>
        <br>
        <?php echo $form->errorSummary($model); ?>

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
        <br>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Editar'); ?>
	</div>

<?php
    $this->endWidget();
?>
</div>


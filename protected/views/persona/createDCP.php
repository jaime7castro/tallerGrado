<?php
$this->breadcrumbs=array(
	'Persona'=>array('index'),
         $id=>array('viewDCP','id'=>$id),
        'Nuevo Contacto'
);

$this->menu=array(
        array('label'=>'Ver Contactos', 'url'=>array('viewDCP', 'id'=>$id)),
);
?>	
<h2>Nuevo Contacto</h2>

<div class="form">

<?php
    $form=$this->beginWidget('CActiveForm');?>

<p class="note">Los campos (<span class="required">*</span>) son requeridos.</p>

	<?php echo $form->errorSummary($modelDCP); ?>
        
        <div class="row">
		<?php echo $form->labelEx($modelDCP,'tipoContacto'); ?>
		<?php echo $form->dropDownList($modelDCP,'tipoContacto',array('Telefono'=>'Telefono','Celular'=>'Celular',
                'Correo electronico'=>'Correo electronico','Fax'=>'Fax')); ?>
		<?php echo $form->error($modelDCP,'tipoContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDCP,'descripcion'); ?>
		<?php echo $form->textField($modelDCP,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($modelDCP,'descripcion'); ?>
	</div>
	

<div class="row" hidden="true">
		<?php echo $form->labelEx($modelDCP,'Persona_codigo'); ?>
                <?php echo $form->dropDownList($modelDCP,'Persona_codigo',array($id=>$id)); ?>
		
		<?php echo $form->error($modelDCP,'Persona_codigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>

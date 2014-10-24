<?php
$this->breadcrumbs=array(
	'Unidad'=>array('index'),
         $id=>array('viewDCU','id'=>$id),
        'Nuevo Contacto'
);

$this->menu=array(
        array('label'=>'Ver Contactos', 'url'=>array('viewDCU', 'id'=>$id)),
);
?>	
<h2>Nuevo Contacto</h2>

<div class="form">

<?php
    $form=$this->beginWidget('CActiveForm');?>

<p class="note">Los campos (<span class="required">*</span>) son requeridos.</p>

	<?php echo $form->errorSummary($modelDCU); ?>
        
        <div class="row">
		<?php echo $form->labelEx($modelDCU,'tipoContacto'); ?>
		<?php echo $form->dropDownList($modelDCU,'tipoContacto',array('Telefono'=>'Telefono','Celular'=>'Celular',
                'Correo electronico'=>'Correo electronico','Fax'=>'Fax')); ?>
		<?php echo $form->error($modelDCU,'tipoContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDCU,'descripcion'); ?>
		<?php echo $form->textField($modelDCU,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($modelDCU,'descripcion'); ?>
	</div>
	

<div class="row" hidden="true">
		<?php echo $form->labelEx($modelDCU,'Unidad_codigo'); ?>
                <?php echo $form->dropDownList($modelDCU,'Unidad_codigo',array($id=>$id)); ?>
		
		<?php echo $form->error($modelDCU,'Unidad_codigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>

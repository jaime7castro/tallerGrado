<?php
/* @var $this AvisoController */
/* @var $data Aviso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('Persona_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->Persona_codigo); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->fechaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaFin')); ?>:</b>
	<?php echo CHtml::encode($data->fechaFin); ?>
	<br />	

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoAviso')); ?>:</b>
	<?php echo CHtml::encode($data->tipoAviso); ?>
	<br />
        
        <hr>
        <?php echo CHtml::link(CHtml::encode('ingresar a ALCANDE DEL AVISO'), array('viewAA', 'id'=>$data->id)); ?>

</div>
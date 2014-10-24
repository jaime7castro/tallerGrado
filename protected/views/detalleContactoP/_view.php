<?php
/* @var $this DetalleContactoPController */
/* @var $data DetalleContactoP */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoContacto')); ?>:</b>
	<?php echo CHtml::encode($data->tipoContacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Persona_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->Persona_codigo); ?>
	<br />


</div>
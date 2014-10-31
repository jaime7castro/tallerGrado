<?php
/* @var $this CuentaUsuarioController */
/* @var $data CuentaUsuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->nombreUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contrasena')); ?>:</b>
	<?php echo CHtml::encode($data->contrasena); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preguntaSeg')); ?>:</b>
	<?php echo CHtml::encode($data->preguntaSeg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respuestaSeg')); ?>:</b>
	<?php echo CHtml::encode($data->respuestaSeg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Persona_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->Persona_codigo); ?>
	<br />


</div>
<?php
/* @var $this ServicioGuardiaController */
/* @var $data ServicioGuardia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia')); ?>:</b>
	<?php echo CHtml::encode($data->dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GrupoGuardia_id')); ?>:</b>
	<?php echo CHtml::encode($data->GrupoGuardia_id); ?>
	<br />
        
        <?php echo CHtml::link(CHtml::encode('ingresar al ROL DE GUARDIA'), array('viewRG', 'id'=>$data->id)); ?>
</div>
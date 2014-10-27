<?php
/* @var $this NovedadController */
/* @var $data Novedad */
?>

<div class="view">
    
        <b><?php echo CHtml::encode($data->getAttributeLabel('ServicioGuardia_id')); ?>:</b>
	<?php echo CHtml::encode($data->ServicioGuardia_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalle')); ?>:</b>
	<?php echo CHtml::encode($data->detalle); ?>
	<br />

</div>
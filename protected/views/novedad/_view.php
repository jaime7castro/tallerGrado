<?php
/* @var $this NovedadController */
/* @var $data Novedad */
?>

<div class="view">
    
        <b><?php echo CHtml::encode($data->getAttributeLabel('ServicioGuardia_id')); ?>:</b>
	<?php echo CHtml::encode($data->servicioGuardia->dia." ".$data->servicioGuardia->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalle')); ?>:</b>
	<?php echo CHtml::encode($data->detalle); ?>
	<br />

</div>
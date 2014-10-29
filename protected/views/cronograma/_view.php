<?php
/* @var $this CronogramaController */
/* @var $data Cronograma */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('Unidad')); ?>:</b>
	<?php echo CHtml::encode($data->unidadCodigo->descripcion); ?>
	<br />
        
        <?php echo CHtml::link(CHtml::encode('ingresar a las ACTIVIDADES'), array('viewACT', 'id'=>$data->id)); ?>


</div>
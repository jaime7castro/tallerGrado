<?php
/* @var $this AlcanceAvisoController */
/* @var $data AlcanceAviso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Aviso_id')); ?>:</b>
	<?php echo CHtml::encode($data->Aviso_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Clase_id')); ?>:</b>
	<?php echo CHtml::encode($data->Clase_id); ?>
	<br />


</div>
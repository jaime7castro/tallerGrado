<?php
/* @var $this PersonaController */
/* @var $data Persona */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo), array('view', 'id'=>$data->codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nroCi')); ?>:</b>
	<?php echo CHtml::encode($data->nroCi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::encode($data->nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apPat')); ?>:</b>
	<?php echo CHtml::encode($data->apPat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apMat')); ?>:</b>
	<?php echo CHtml::encode($data->apMat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaNac')); ?>:</b>
	<?php echo CHtml::encode($data->fechaNac); ?>
	<br />
        
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('Clase_id')); ?>:</b>
	<?php echo CHtml::encode($data->clase->descripcion); ?>
	<br />
        
        <hr>
  
        <?php echo CHtml::link(CHtml::encode('ingresar a CONTACTOS'), array('viewDCP', 'id'=>$data->codigo)); ?>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('edad')); ?>:</b>
	<?php echo CHtml::encode($data->edad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoSangre')); ?>:</b>
	<?php echo CHtml::encode($data->tipoSangre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grado')); ?>:</b>
	<?php echo CHtml::encode($data->grado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidad')); ?>:</b>
	<?php echo CHtml::encode($data->especialidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargoUnidad')); ?>:</b>
	<?php echo CHtml::encode($data->cargoUnidad); ?>
	<br />
        
	

	*/ ?>

</div>
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
	<?php echo CHtml::encode($data->grupoGuardia->descripcion); ?>
	<br/>
        <hr>
        <?php echo CHtml::link(CHtml::encode('ingresar al ROL DE GUARDIA'), array('viewRG', 'id'=>$data->id)); ?>
        <br>
        <?php if($data->rolGuardias) {
            echo CHtml::link(CHtml::encode('ingresar al HORARIO DE GUARDIA'), array('viewHG', 'id'=>$data->id));            
        }else{ 
            echo '<h5> Registre el ROL DE GUARDIA con el Grupo de Guardia antes de Realizar el HORARIO DE GUARDIA<h5>';     
        }?>
</div>
<?php
/* @var $this ServicioGuardiaController */
/* @var $model ServicioGuardia */

$this->breadcrumbs=array(
	'Servicio de Guardia'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Servicio de Guardia', 'url'=>array('index')),
	array('label'=>'Nuevo Servicio de Guardia', 'url'=>array('create')),
	array('label'=>'Editar Servicio de Guardia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Servicio de Guardia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Está seguro de eliminar este Servicio de Guardia?')),
	array('label'=>'Administrar Servicio de Guardia', 'url'=>array('admin')),
);
?>

<h1>Ver Servicio de Guardia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dia',
		'fecha',
		array(
                  'label'=> 'Grupo de Guardia',
                  'value'=>$model->grupoGuardia->descripcion, 
                ),
	),
)); ?>
<hr>
<?php echo CHtml::link(CHtml::encode('ingresar al ROL DE GUARDIA'), array('viewRG', 'id'=>$model->id)); ?>
<br><br>
<?php if($model->rolGuardias) {
            echo CHtml::link(CHtml::encode('ingresar al HORARIO DE GUARDIA'), array('viewHG', 'id'=>$model->id));            
      }else{ 
            echo '<h5> Registre el ROL DE GUARDIA con el Grupo de Guardia antes de Realizar el HORARIO DE GUARDIA<h5>';     
}?>
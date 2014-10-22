<?php
/* @var $this PuestoGuardiaController */
/* @var $model PuestoGuardia */

$this->breadcrumbs=array(
	'Puesto de Guardia'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Puesto de Guardia', 'url'=>array('index')),
	array('label'=>'Nuevo Puesto de Guardia', 'url'=>array('create')),
	array('label'=>'Editar Puesto de Guardia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Puesto de Guardia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ésta seguro que desea eliminar éste Item?')),
	array('label'=>'Administrar Puesto de Guardia', 'url'=>array('admin')),
);
?>

<h1>Ver Puesto de Guardia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
		'abreviatura',
	),
)); ?>

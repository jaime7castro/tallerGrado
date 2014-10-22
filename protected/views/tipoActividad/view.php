<?php
/* @var $this TipoActividadController */
/* @var $model TipoActividad */

$this->breadcrumbs=array(
	'Tipo de Actividad'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Tipo de Actividad', 'url'=>array('index')),
	array('label'=>'Nuevo Tipo de Actividad', 'url'=>array('create')),
	array('label'=>'Editar Tipo de Actividad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Tipo de Actividad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tipo de Actividad', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo de Actividad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
	),
)); ?>

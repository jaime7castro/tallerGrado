<?php
/* @var $this UnidadController */
/* @var $model Unidad */

$this->breadcrumbs=array(
	'Unidad'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	#array('label'=>'List Unidad', 'url'=>array('index')),
	#array('label'=>'Create Unidad', 'url'=>array('create')),
	array('label'=>'Editar Unidad', 'url'=>array('update', 'id'=>$model->codigo)),
	#array('label'=>'Delete Unidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	#array('label'=>'Manage Unidad', 'url'=>array('admin')),
);
?>

<h1>Ver Unidad #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'descripcion',
		'efemeride',
		'direccion',
	),
)); ?>

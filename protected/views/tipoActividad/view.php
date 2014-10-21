<?php
/* @var $this TipoActividadController */
/* @var $model TipoActividad */

$this->breadcrumbs=array(
	'Tipo Actividads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoActividad', 'url'=>array('index')),
	array('label'=>'Create TipoActividad', 'url'=>array('create')),
	array('label'=>'Update TipoActividad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoActividad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoActividad', 'url'=>array('admin')),
);
?>

<h1>View TipoActividad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
	),
)); ?>

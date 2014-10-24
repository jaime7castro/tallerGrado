<?php
/* @var $this DetalleContactoPController */
/* @var $model DetalleContactoP */

$this->breadcrumbs=array(
	'Detalle Contacto Ps'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DetalleContactoP', 'url'=>array('index')),
	array('label'=>'Create DetalleContactoP', 'url'=>array('create')),
	array('label'=>'Update DetalleContactoP', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DetalleContactoP', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetalleContactoP', 'url'=>array('admin')),
);
?>

<h1>View DetalleContactoP #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
		'tipoContacto',
		'Persona_codigo',
	),
)); ?>

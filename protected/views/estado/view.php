<?php
/* @var $this EstadoController */
/* @var $model Estado */

$this->breadcrumbs=array(
	'Estados del Personal'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Estado', 'url'=>array('index')),
	array('label'=>'Nuevo Estado', 'url'=>array('create')),
	array('label'=>'Editar Estado', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Estado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ésta seguro que desea eliminar éste estado?')),
	array('label'=>'Administrar Estado', 'url'=>array('admin')),
);
?>

<h1>Ver Estado del Personal #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
	),
)); ?>

<?php
/* @var $this CuentaUsuarioController */
/* @var $model CuentaUsuario */

$this->breadcrumbs=array(
	'Cuenta Usuarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CuentaUsuario', 'url'=>array('index')),
	array('label'=>'Create CuentaUsuario', 'url'=>array('create')),
	array('label'=>'Update CuentaUsuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CuentaUsuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CuentaUsuario', 'url'=>array('admin')),
);
?>

<h1>View CuentaUsuario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombreUsuario',
		'contrasena',
		'preguntaSeg',
		'respuestaSeg',
		'Persona_codigo',
	),
)); ?>

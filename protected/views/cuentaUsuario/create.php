<?php
/* @var $this CuentaUsuarioController */
/* @var $model CuentaUsuario */

$this->breadcrumbs=array(
	'Cuenta Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CuentaUsuario', 'url'=>array('index')),
	array('label'=>'Manage CuentaUsuario', 'url'=>array('admin')),
);
?>

<h1>Create CuentaUsuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
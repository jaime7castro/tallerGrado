<?php
/* @var $this CuentaUsuarioController */
/* @var $model CuentaUsuario */

$this->breadcrumbs=array(
	'Cuenta Usuarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CuentaUsuario', 'url'=>array('index')),
	array('label'=>'Create CuentaUsuario', 'url'=>array('create')),
	array('label'=>'View CuentaUsuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CuentaUsuario', 'url'=>array('admin')),
);
?>

<h1>Update CuentaUsuario <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
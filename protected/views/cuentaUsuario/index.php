<?php
/* @var $this CuentaUsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cuenta Usuarios',
);

$this->menu=array(
	array('label'=>'Create CuentaUsuario', 'url'=>array('create')),
	array('label'=>'Manage CuentaUsuario', 'url'=>array('admin')),
);
?>

<h1>Cuenta Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this DetalleContactoPController */
/* @var $model DetalleContactoP */

$this->breadcrumbs=array(
	'Detalle Contacto Ps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DetalleContactoP', 'url'=>array('index')),
	array('label'=>'Manage DetalleContactoP', 'url'=>array('admin')),
);
?>

<h1>Create DetalleContactoP</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
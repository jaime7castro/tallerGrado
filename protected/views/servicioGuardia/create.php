<?php
/* @var $this ServicioGuardiaController */
/* @var $model ServicioGuardia */

$this->breadcrumbs=array(
	'Servicio de Guardia'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Servicio de Guardia', 'url'=>array('index')),
	array('label'=>'Administrar Servicio de Guardia', 'url'=>array('admin')),
);
?>

<h1>Nuevo Servicio de Guardia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
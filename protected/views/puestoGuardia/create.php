<?php
/* @var $this PuestoGuardiaController */
/* @var $model PuestoGuardia */

$this->breadcrumbs=array(
	'Puesto de Guardia'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Puesto de Guardia', 'url'=>array('index')),
	array('label'=>'Administrar Puesto de Guardia', 'url'=>array('admin')),
);
?>

<h1>Nuevo Puesto de Guardia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
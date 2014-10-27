<?php
/* @var $this NovedadController */
/* @var $model Novedad */

$this->breadcrumbs=array(
	'Novedad'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Novedad', 'url'=>array('index')),
	array('label'=>'Administrar Novedad', 'url'=>array('admin')),
);
?>

<h1>Nueva Novedad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
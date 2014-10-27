<?php
/* @var $this AvisoController */
/* @var $model Aviso */

$this->breadcrumbs=array(
	'Avisos'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Aviso', 'url'=>array('index')),
	array('label'=>'Administrar Aviso', 'url'=>array('admin')),
);
?>

<h1>Nuevo Aviso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
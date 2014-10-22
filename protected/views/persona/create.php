<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Persona'=>array('index'),
	'Nueva',
);

$this->menu=array(
	array('label'=>'Listar Persona', 'url'=>array('index')),
	array('label'=>'Administar Persona', 'url'=>array('admin')),
);
?>

<h1>Nueva Persona</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
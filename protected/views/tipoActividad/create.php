<?php
/* @var $this TipoActividadController */
/* @var $model TipoActividad */

$this->breadcrumbs=array(
	'Tipo Actividad'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Tipo de Actividad', 'url'=>array('index')),
	array('label'=>'Administrar Tipo de Actividad', 'url'=>array('admin')),
);
?>

<h1>Nuevo Tipo de Actividad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
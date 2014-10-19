<?php
/* @var $this TipoActividadController */
/* @var $model TipoActividad */

$this->breadcrumbs=array(
	'Tipo Actividads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoActividad', 'url'=>array('index')),
	array('label'=>'Manage TipoActividad', 'url'=>array('admin')),
);
?>

<h1>Create TipoActividad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
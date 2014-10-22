<?php
/* @var $this MaterialEquipoController */
/* @var $model MaterialEquipo */

$this->breadcrumbs=array(
	'Material y Equipos'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Material y Equipo', 'url'=>array('index')),
	array('label'=>'Administrar Material y Equipo', 'url'=>array('admin')),
);
?>

<h1>Nuevo Material y Equipo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
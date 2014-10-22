<?php
/* @var $this GrupoGuardiaController */
/* @var $model GrupoGuardia */

$this->breadcrumbs=array(
	'Grupo de Guardia'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Grupo de Guardia', 'url'=>array('index')),
	array('label'=>'Administrar Grupo de Guardia', 'url'=>array('admin')),
);
?>

<h1>Nuevo Grupo de Guardia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
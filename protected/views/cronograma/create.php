<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronograma'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Cronograma', 'url'=>array('index')),
	array('label'=>'Administrar Cronograma', 'url'=>array('admin')),
);
?>

<h1>Nuevo Cronograma</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
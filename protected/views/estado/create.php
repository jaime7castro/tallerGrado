<?php
/* @var $this EstadoController */
/* @var $model Estado */

$this->breadcrumbs=array(
	'Estados del Personal'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Estado', 'url'=>array('index')),
	array('label'=>'Administrar Estado', 'url'=>array('admin')),
);
?>

<h1>Nuevo Estado del Personal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
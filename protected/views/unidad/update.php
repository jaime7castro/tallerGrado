<?php
/* @var $this UnidadController */
/* @var $model Unidad */

$this->breadcrumbs=array(
	'Unidad'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Editar',
);

$this->menu=array(
	#array('label'=>'List Unidad', 'url'=>array('index')),
	#array('label'=>'Create Unidad', 'url'=>array('create')),
	array('label'=>'Ver Unidad', 'url'=>array('view', 'id'=>$model->codigo)),
	#array('label'=>'Manage Unidad', 'url'=>array('admin')),
);
?>

<h1>Editar Unidad <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
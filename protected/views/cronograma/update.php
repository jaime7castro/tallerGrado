<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronograma'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Cronograma', 'url'=>array('index')),
	array('label'=>'Nuevo Cronograma', 'url'=>array('create')),
	array('label'=>'Ver Cronograma', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Cronograma', 'url'=>array('admin')),
);
?>

<h1>Editar Cronograma <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
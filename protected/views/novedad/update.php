<?php
/* @var $this NovedadController */
/* @var $model Novedad */

$this->breadcrumbs=array(
	'Novedad'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Novedad', 'url'=>array('index')),
	array('label'=>'Nueva Novedad', 'url'=>array('create')),
	array('label'=>'Ver Novedad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Novedad', 'url'=>array('admin')),
);
?>

<h1>Editar Novedad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this AvisoController */
/* @var $model Aviso */

$this->breadcrumbs=array(
	'Avisos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Aviso', 'url'=>array('index')),
	array('label'=>'Nuevo Aviso', 'url'=>array('create')),
	array('label'=>'Ver Aviso', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Aviso', 'url'=>array('admin')),
);
?>

<h1>Editar Aviso <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
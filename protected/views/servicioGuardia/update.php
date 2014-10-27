<?php
/* @var $this ServicioGuardiaController */
/* @var $model ServicioGuardia */

$this->breadcrumbs=array(
	'Servicio de Guardia'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Servicio de Guardia', 'url'=>array('index')),
	array('label'=>'Nuevo Servicio de Guardia', 'url'=>array('create')),
	array('label'=>'Ver Servicio de Guardia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Servicio de Guardia', 'url'=>array('admin')),
);
?>

<h1>Editar Servicio de Guardia <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
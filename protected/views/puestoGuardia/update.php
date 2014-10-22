<?php
/* @var $this PuestoGuardiaController */
/* @var $model PuestoGuardia */

$this->breadcrumbs=array(
	'Puesto de Guardia'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Puesto de Guardia', 'url'=>array('index')),
	array('label'=>'Nuevo Puesto de Guardia', 'url'=>array('create')),
	array('label'=>'Ver Puesto de Guardia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Puesto de Guardia', 'url'=>array('admin')),
);
?>

<h1>Editar Puesto de Guardia <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
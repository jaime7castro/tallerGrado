<?php
/* @var $this TipoActividadController */
/* @var $model TipoActividad */

$this->breadcrumbs=array(
	'Tipo de Actividad'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Tipo de Actividad', 'url'=>array('index')),
	array('label'=>'Nuevo Tipo de Actividad', 'url'=>array('create')),
	array('label'=>'Ver Tipo de Actividad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Tipo de Actividad', 'url'=>array('admin')),
);
?>

<h1>Editar Tipo de Actividad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
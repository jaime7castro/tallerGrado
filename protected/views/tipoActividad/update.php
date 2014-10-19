<?php
/* @var $this TipoActividadController */
/* @var $model TipoActividad */

$this->breadcrumbs=array(
	'Tipo Actividads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoActividad', 'url'=>array('index')),
	array('label'=>'Create TipoActividad', 'url'=>array('create')),
	array('label'=>'View TipoActividad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoActividad', 'url'=>array('admin')),
);
?>

<h1>Update TipoActividad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
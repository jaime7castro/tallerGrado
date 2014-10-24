<?php
/* @var $this DetalleContactoPController */
/* @var $model DetalleContactoP */

$this->breadcrumbs=array(
	'Detalle Contacto Ps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetalleContactoP', 'url'=>array('index')),
	array('label'=>'Create DetalleContactoP', 'url'=>array('create')),
	array('label'=>'View DetalleContactoP', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DetalleContactoP', 'url'=>array('admin')),
);
?>

<h1>Update DetalleContactoP <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this EstadoController */
/* @var $model Estado */

$this->breadcrumbs=array(
	'Estados del Personal'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Estado', 'url'=>array('index')),
	array('label'=>'Nuevo Estado', 'url'=>array('create')),
	array('label'=>'Ver Estado', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Estado', 'url'=>array('admin')),
);
?>

<h1>Editar Estado del Personal <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
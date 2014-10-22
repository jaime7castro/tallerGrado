<?php
/* @var $this MaterialEquipoController */
/* @var $model MaterialEquipo */

$this->breadcrumbs=array(
	'Material y Equipos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Material y Equipo', 'url'=>array('index')),
	array('label'=>'Nuevo Material y Equipo', 'url'=>array('create')),
	array('label'=>'Ver Material y Equipo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administar Material y Equipo', 'url'=>array('admin')),
);
?>

<h1>Editar Material y Equipo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
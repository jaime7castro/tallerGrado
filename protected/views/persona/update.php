<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Persona'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Persona', 'url'=>array('index')),
	array('label'=>'Nueva Persona', 'url'=>array('create')),
	array('label'=>'Ver Persona', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Administar Persona', 'url'=>array('admin')),
);
?>

<h1>Editar Persona <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
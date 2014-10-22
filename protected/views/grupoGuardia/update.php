<?php
/* @var $this GrupoGuardiaController */
/* @var $model GrupoGuardia */

$this->breadcrumbs=array(
	'Grupo de Guardia'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Grupo de Guardia', 'url'=>array('index')),
	array('label'=>'Nuevo Grupo de Guardia', 'url'=>array('create')),
	array('label'=>'Ver Grupo de Guardia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Grupo de Guardia', 'url'=>array('admin')),
);
?>

<h1>Editar Grupo de Guardia <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
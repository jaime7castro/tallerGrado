<?php
/* @var $this GrupoGuardiaController */
/* @var $model GrupoGuardia */

$this->breadcrumbs=array(
	'Grupo de Guardia'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Grupo de Guardia', 'url'=>array('index')),
	array('label'=>'Nuevo Grupo de Guardia', 'url'=>array('create')),
	array('label'=>'Editar Grupo de Guardia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Grupo de Guardia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Está seguro que desea eliminar éste Grupo?')),
	array('label'=>'Administrar Grupo de Guardia', 'url'=>array('admin')),
);
?>

<h1>Ver Grupo de Guardia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
		'abreviatura',
		'lema',
	),
)); ?>

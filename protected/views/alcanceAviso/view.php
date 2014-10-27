<?php
/* @var $this AlcanceAvisoController */
/* @var $model AlcanceAviso */

$this->breadcrumbs=array(
	'Alcance Avisos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AlcanceAviso', 'url'=>array('index')),
	array('label'=>'Create AlcanceAviso', 'url'=>array('create')),
	array('label'=>'Update AlcanceAviso', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AlcanceAviso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlcanceAviso', 'url'=>array('admin')),
);
?>

<h1>View AlcanceAviso #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Aviso_id',
		'Clase_id',
	),
)); ?>

<?php
/* @var $this AlcanceAvisoController */
/* @var $model AlcanceAviso */

$this->breadcrumbs=array(
	'Alcance Avisos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlcanceAviso', 'url'=>array('index')),
	array('label'=>'Create AlcanceAviso', 'url'=>array('create')),
	array('label'=>'View AlcanceAviso', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AlcanceAviso', 'url'=>array('admin')),
);
?>

<h1>Update AlcanceAviso <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
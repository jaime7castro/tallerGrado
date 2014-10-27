<?php
/* @var $this AlcanceAvisoController */
/* @var $model AlcanceAviso */

$this->breadcrumbs=array(
	'Alcance Avisos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AlcanceAviso', 'url'=>array('index')),
	array('label'=>'Manage AlcanceAviso', 'url'=>array('admin')),
);
?>

<h1>Create AlcanceAviso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this AlcanceAvisoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alcance Avisos',
);

$this->menu=array(
	array('label'=>'Create AlcanceAviso', 'url'=>array('create')),
	array('label'=>'Manage AlcanceAviso', 'url'=>array('admin')),
);
?>

<h1>Alcance Avisos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

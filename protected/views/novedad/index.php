<?php
/* @var $this NovedadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Novedad',
);

$this->menu=array(
	array('label'=>'Nueva Novedad', 'url'=>array('create')),
	array('label'=>'Administrar Novedad', 'url'=>array('admin')),
);
?>

<h1>Registrar Novedad</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this TipoActividadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo de Actividad',
);

$this->menu=array(
	array('label'=>'Nuevo Tipo de Actividad', 'url'=>array('create')),
	array('label'=>'Administrar Tipo de Actividad', 'url'=>array('admin')),
);
?>

<h1>Gestionar Tipo de Actividad</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

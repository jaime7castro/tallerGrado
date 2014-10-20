<?php
/* @var $this TipoActividadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Actividad',
);

$this->menu=array(
	array('label'=>'Create TipoActividad', 'url'=>array('create')),
	array('label'=>'Manage TipoActividad', 'url'=>array('admin')),
);
?>

<h1>Tipo Actividad</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

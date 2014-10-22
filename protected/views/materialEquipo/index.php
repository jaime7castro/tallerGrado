<?php
/* @var $this MaterialEquipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Material y Equipos',
);

$this->menu=array(
	array('label'=>'Nuevo Material y Equipo', 'url'=>array('create')),
	array('label'=>'Administrar Material y Equipo', 'url'=>array('admin')),
);
?>

<h1>Material y Equipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

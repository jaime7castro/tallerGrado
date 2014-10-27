<?php
/* @var $this ServicioGuardiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Servicio de  Guardia',
);

$this->menu=array(
	array('label'=>'Nuevo Servicio de Guardia', 'url'=>array('create')),
	array('label'=>'Administrar Servicio de Guardia', 'url'=>array('admin')),
);
?>

<h1>Servicio de Guardia</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this PuestoGuardiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Puesto de Guardia',
);

$this->menu=array(
	array('label'=>'Nuevo Puesto de Guardia', 'url'=>array('create')),
	array('label'=>'Administrar Puesto de Guardia', 'url'=>array('admin')),
);
?>

<h1>Gestionar Puesto de Guardia</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

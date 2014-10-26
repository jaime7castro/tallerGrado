<?php
/* @var $this CronogramaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cronograma',
);

$this->menu=array(
	array('label'=>'Nuevo Cronograma', 'url'=>array('create')),
	array('label'=>'Administrar Cronograma', 'url'=>array('admin')),
);
?>

<h1>Realizar Cronograma de Actividades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

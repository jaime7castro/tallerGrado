<?php
/* @var $this UnidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unidad',
);


?>

<h1>Registrar Unidad</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

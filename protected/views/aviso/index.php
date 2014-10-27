<?php
/* @var $this AvisoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Avisos',
);

$this->menu=array(
	array('label'=>'Nuevo Aviso', 'url'=>array('create')),
	array('label'=>'Administrar Aviso', 'url'=>array('admin')),
);
?>

<h1>Registrar Aviso</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

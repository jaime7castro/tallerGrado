<?php
/* @var $this PersonaController */
/* @var $dataProvider CActiveDataProvider */


$this->breadcrumbs=array(
	'Persona',
);

$this->menu=array(
	array('label'=>'Nueva Persona', 'url'=>array('create')),
	array('label'=>'Administrar Persona', 'url'=>array('admin')),
);
?>

<h1>Gestionar Persona</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


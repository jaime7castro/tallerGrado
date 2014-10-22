<?php
/* @var $this EstadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estados del Personal',
);

$this->menu=array(
	array('label'=>'Nuevo Estado', 'url'=>array('create')),
	array('label'=>'Administrar Estado', 'url'=>array('admin')),
);
?>

<h1>Gestionar Estado</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

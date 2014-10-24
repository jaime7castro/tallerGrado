<?php
/* @var $this DetalleContactoPController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detalle Contacto Ps',
);

$this->menu=array(
	array('label'=>'Create DetalleContactoP', 'url'=>array('create')),
	array('label'=>'Manage DetalleContactoP', 'url'=>array('admin')),
);
?>

<h1>Detalle Contacto Ps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

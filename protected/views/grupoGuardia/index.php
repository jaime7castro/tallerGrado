<?php
/* @var $this GrupoGuardiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grupo de Guardia',
);

$this->menu=array(
	array('label'=>'Nuevo Grupo de Guardia', 'url'=>array('create')),
	array('label'=>'Administrar Grupo de Guardia', 'url'=>array('admin')),
);
?>

<h1>Gestionar Grupo de Guardia</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

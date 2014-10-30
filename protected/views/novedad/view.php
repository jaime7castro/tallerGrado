<?php
/* @var $this NovedadController */
/* @var $model Novedad */

$this->breadcrumbs=array(
	'Novedad'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Novedad', 'url'=>array('index')),
	array('label'=>'Nuevo Novedad', 'url'=>array('create')),
	array('label'=>'Editar Novedad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Novedad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Esta seguro que desea eliminar esta Novedad?')),
	array('label'=>'Administrar Novedad', 'url'=>array('admin')),
);
?>

<h1>Ver Novedad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
                array(
                  'label'=> 'Servicio de Guardia',
                  'value'=>$model->servicioGuardia->dia." ".$model->servicioGuardia->fecha, 
                ),
		//'id',
		'hora',
		'detalle',
		
	),
)); ?>

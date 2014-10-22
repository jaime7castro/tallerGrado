<?php
/* @var $this MaterialEquipoController */
/* @var $model MaterialEquipo */

$this->breadcrumbs=array(
	'Material y Equipos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Material y Equipo', 'url'=>array('index')),
	array('label'=>'Nuevo Material y Equipo', 'url'=>array('create')),
	array('label'=>'Editar Material y Equipo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Material y Equipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Está seguro que desea de dar de baja éste material o equipo?')),
	array('label'=>'Administar Material y Equipo', 'url'=>array('admin')),
);
?>

<h1>Ver Material y Equipo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                'tipo',
                'codigo',
		'cantidad',
		'detalle',
		'observaciones',	
		//'Unidad_codigo',
	),
)); ?>

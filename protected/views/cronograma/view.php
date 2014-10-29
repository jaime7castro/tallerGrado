<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronograma'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Cronograma', 'url'=>array('index')),
	array('label'=>'Nuevo Cronograma', 'url'=>array('create')),
	array('label'=>'Editar Cronograma', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Cronograma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Cronograma', 'url'=>array('admin')),
);
?>

<h1>Ver Cronograma #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dia',
		'fecha',
                array(
                  'label'=> 'Unidad',
                  'value'=>$model->unidadCodigo->descripcion, 
                ),
		//'Unidad_codigo',
	),
)); ?>
<?php echo CHtml::link(CHtml::encode('ingresar a las ACTIVIDADES'), array('viewACT', 'id'=>$model->id)); ?>

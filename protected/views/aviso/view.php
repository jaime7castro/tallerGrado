<?php
/* @var $this AvisoController */
/* @var $model Aviso */

$this->breadcrumbs=array(
	'Avisos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Aviso', 'url'=>array('index')),
	array('label'=>'Nuevo Aviso', 'url'=>array('create')),
	array('label'=>'Editar Aviso', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Aviso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Está seguro que desea eliminar éste Aviso?')),
	array('label'=>'Administrar Aviso', 'url'=>array('admin')),
);
?>

<h1>Ver Aviso #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                'Persona_codigo',
                'descripcion',
		'fechaInicio',
		'fechaFin',		
		'observaciones',
		'tipoAviso',
		
	),
)); ?>
<hr>
<?php echo CHtml::link(CHtml::encode('ingresar a ALCANDE DEL AVISO'), array('viewAA', 'id'=>$model->id)); ?>

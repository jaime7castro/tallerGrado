<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Persona'=>array('index'),
	$model->codigo,
);


$this->menu=array(
	array('label'=>'Listar Persona', 'url'=>array('index')),
	array('label'=>'Nuevo Persona', 'url'=>array('create')),
	array('label'=>'Editar Persona', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Eliminar Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Está seguro de eliminar esta persona?')),
	array('label'=>'Administrar Persona', 'url'=>array('admin')),
);
?>

<h1>Ver Persona #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'nroCi',
                'apPat',
		'apMat',
		'nombres',	
		'sexo',
		'fechaNac',
		'edad',
		'tipoSangre',
		'direccion',
                'email',
		'grado',
		'especialidad',
		'cargoUnidad',
                array(
                  'label'=> 'Clase',
                  'value'=>$model->clase->descripcion, 
                ),
	),
)); 
?>
<?php echo CHtml::link(CHtml::encode('ingresar a CONTACTOS'), array('viewDCP', 'id'=>$model->codigo)); ?>


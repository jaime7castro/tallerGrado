<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Persona'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Persona', 'url'=>array('index')),
	array('label'=>'Nueva Persona', 'url'=>array('create')),
        array('label'=>'Exportar a Excel', 'url'=>array('excel')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#persona-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Persona</h1>

<p>
También puede escribir un operador de comparaci&oacute;n 
(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)
al principio de cada uno de los valores de b&uacute;squeda para especificar 
c&oacute;mo se debe hacer la comparaci&oacute;n . 
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'persona-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,     
	'columns'=>array(
		'codigo',
		'nroCi',
		'nombres',
		'apPat',
		'apMat',
                array(
                    'header'=>'Sexo',
                    'name'=>'sexo',
                    'value'=>'$data->sexo',
                    'filter'=>array('H'=>'H','M'=>'M'),
		),
                'email',

		/*
                 * 'sexo',
		'fechaNac',
		'edad',
		'tipoSangre',
		'direccion',
		'grado',
		'especialidad',
		'cargoUnidad',
		'Clase_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

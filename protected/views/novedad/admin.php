<?php
/* @var $this NovedadController */
/* @var $model Novedad */

$this->breadcrumbs=array(
	'Novedad'=>array('index'),
	'Administar',
);

$this->menu=array(
	array('label'=>'Listar Novedad', 'url'=>array('index')),
	array('label'=>'Nueva Novedad', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#novedad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Novedades</h1>

<p>
También puede escribir un operador de comparaci&oacute;n 
(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)
al principio de cada uno de los valores de b&uacute;squeda para especificar 
c&oacute;mo se debe hacer la comparaci&oacute;n . 
</p>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'novedad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                //'ServicioGuardia_id',
                array(
                    'header'=>'Día',
                    'name'=>'Dia',
                    'value'=>'$data->servicioGuardia->dia',
		),
                array(
                    'header'=>'Fecha',
                    'name'=>'Fecha',
                    'value'=>'$data->servicioGuardia->fecha',
		),
		//'id',
		'hora',
		'detalle',		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

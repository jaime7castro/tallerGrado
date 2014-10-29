<?php
/* @var $this MaterialEquipoController */
/* @var $model MaterialEquipo */

$this->breadcrumbs=array(
	'Material y Equipos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Material y Equipo', 'url'=>array('index')),
	array('label'=>'Nuevo Material y Equipo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#material-equipo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Material y Equipos</h1>

<p>
También puede escribir un operador de comparaci&oacute;n 
(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)
al principio de cada uno de los valores de b&uacute;squeda para especificar 
c&oacute;mo se debe hacer la comparaci&oacute;n . 
</p>

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'material-equipo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
                array(
                    'name'=>'tipo',
                    'value'=>'$data->tipo',
                    'filter'=> array('Interno'=>'Interno','Activo Fijo'=>'Activo Fijo'), 
		),
                'codigo',
		'cantidad',
		'detalle',
		'observaciones',		
		/*
		'Unidad_codigo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

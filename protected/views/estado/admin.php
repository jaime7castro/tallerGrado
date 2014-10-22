<?php
/* @var $this EstadoController */
/* @var $model Estado */

$this->breadcrumbs=array(
	'Estado del Personal'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Estado', 'url'=>array('index')),
	array('label'=>'Nuevo Estado', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#estado-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Estados del Personal</h1>

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
	'id'=>'estado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

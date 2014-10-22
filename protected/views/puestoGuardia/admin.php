<?php
/* @var $this PuestoGuardiaController */
/* @var $model PuestoGuardia */

$this->breadcrumbs=array(
	'Puesto de Guardia'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Puesto de Guardia', 'url'=>array('index')),
	array('label'=>'Nuevo Puesto de Guardia', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#puesto-guardia-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Puesto de Guardia</h1>

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
	'id'=>'puesto-guardia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'descripcion',
		'abreviatura',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

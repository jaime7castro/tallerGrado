<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronograma'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Cronograma', 'url'=>array('index')),
	array('label'=>'Nuevo Cronograma', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cronograma-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Cronograma</h1>

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
	'id'=>'cronograma-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
                    'name'=>'dia',
                    'value'=>'$data->dia',
                        'filter'=> array('Lunes'=>'Lunes','Martes'=>'Martes','Miercoles'=>'Miercoles',
                            'Jueves'=>'Jueves','Viernes'=>'Viernes','Sabado'=>'Sabado','Domingo'=>'Domingo'), 
		),
		'fecha',
		//'Unidad_codigo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

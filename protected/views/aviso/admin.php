<?php
/* @var $this AvisoController */
/* @var $model Aviso */

$this->breadcrumbs=array(
	'Aviso'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Aviso', 'url'=>array('index')),
	array('label'=>'Nuevo Aviso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#aviso-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Avisos</h1>

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
	'id'=>'aviso-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
                array(
                    'name'=>'tipoAviso',
                    'value'=>'$data->tipoAviso',
                    'filter'=> array('Disposicion'=>'Disposición','Comunicado'=>'Comunicado','Consigna'=>'Consigna'), 
		),
                array(
                    'header'=>'Apellido Paterno',
                    'name'=>'ApellidoPaterno',
                    'value'=>'$data->personaCodigo->apPat',
		),
                array(
                    'header'=>'Apellido Materno',
                    'name'=>'ApellidoMaterno',
                    'value'=>'$data->personaCodigo->apMat',
		),          
                array(
                    'header'=>'Nombres',
                    'name'=>'Nombres',
                    'value'=>'$data->personaCodigo->nombres',
		),
                
                //'descripcion',
                //'Persona_codigo',
		'fechaInicio',
		'fechaFin',	
		//'observaciones',
				
	
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

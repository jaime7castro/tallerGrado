<?php
/* @var $this EstadoPersonaController */
/* @var $model EstadoPersona */

$this->breadcrumbs=array(
	'Administrar Estado de las Personas',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#estado-persona-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Estado de las Personas</h1>

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

<?php 
Yii::import('application.extensions.eeditable.*');
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estado-persona-grid',
	'dataProvider'=>$model->search(),  
        // esta linea es importante, para que tras updates la extension siga funcionando:
		'afterAjaxUpdate'=>new CJavaScriptExpression("function(id){ $('#'+id).EEditable(); }"),
        'filter'=>$model,
	'columns'=>array(
                //'id',
                /*array(
                    'name'=>'id',
                    'class'=>'EEditableColumn', 'editable_type'=>'editbox',
                    'action'=>array('/estadoPersona/ajaxEditColumn'),
                       
                ),*/
                'Persona_codigo',
                array(
                  'name'=>'Nombre',
                  'value'=>'$data->personaCodigo->nombres',
                ),
                array(
                  'name'=>'Apellido_Paterno',
                  'value'=>'$data->personaCodigo->apPat', 
                ),  
                array(
                  'name'=>'Apellido_Materno',
                  'value'=>'$data->personaCodigo->apMat',
                ), 
               // array(
                //  'name'=>'Estado_id',
                //  'value'=>'$data->estado->descripcion',
                //  'filter'=> EstadoPersona::getListEstado(), 
                //),
                array('name'=>'Estado_id',
                    'value'=>'$data->estado->descripcion',
                    'class'=>'EEditableColumn', 'editable_type'=>'select', 
			'editable_options'=>EstadoPersona::getListEstado(),
                    'action'=>array('/EstadoPersona/ajaxEditColumn'),
                    'filter'=> EstadoPersona::getListEstado(), 
		),
                
		/*array(
			'class'=>'CButtonColumn',
     
		),*/
	),
)); ?>

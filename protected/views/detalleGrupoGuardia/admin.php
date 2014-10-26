<?php
/* @var $this DetalleGrupoGuardiaController */
/* @var $model DetalleGrupoGuardia */

$this->breadcrumbs=array(
	'Asignar Grupo de Guardia'
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#detalle-grupo-guardia-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Asignar Grupo de Guardia</h1>

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
	'id'=>'detalle-grupo-guardia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
            
                //'id'
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
                array('name'=>'GrupoGuardia_id',
                    'value'=>'$data->grupoGuardia->descripcion',
                    'class'=>'EEditableColumn', 'editable_type'=>'select', 
			'editable_options'=>DetalleGrupoGuardia::getListGrupoGuardia(),
                    'action'=>array('/DetalleGrupoGuardia/ajaxEditColumn'),
                    'filter'=> DetalleGrupoGuardia::getListGrupoGuardia(),
		),
	),
)); ?>

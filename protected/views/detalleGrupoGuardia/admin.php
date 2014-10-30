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

</div><!-- search-form -->

<?php 
Yii::import('application.extensions.eeditable.*');
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'detalle-grupo-guardia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    
        // esta linea es importante, para que tras updates la extension siga funcionando:
	'afterAjaxUpdate'=>new CJavaScriptExpression("function(id){ $('#'+id).EEditable(); }"),
	'columns'=>array(
            
                //'id'
                'Persona_codigo',
                array(
                    'header'=>'CI',
                    'name'=>'Ci',
                    'value'=>'$data->personaCodigo->nroCi',
		),
                array(
                    'header'=>'Grado',
                    'name'=>'Grado',
                    'value'=>'$data->personaCodigo->grado',
                    'filter'=>array('Marino'=>'Marinero','M2'=>'Marinero de Segunada',
                    'M1'=>'Marinero de Primera','SI.'=>'Sargento Inicial','S2.'=>'Sargento Segundo',
                    'S1'=>'Sargento Primero','SM'=>'Sargento Mayor','SOI'=>'Suboficial Inicial',
                    'SO2'=>'Suboficial Segundo','SO1'=>'Suboficial Primero','SOM'=>'Suboficial Mayor',
                    'Alf.'=>'Alférez','TF.'=>'Teniente de Fragata','TN.'=>'Teniente de Navio',
                    'CC.'=>'Capitan de Corveta','CF.'=>'Capitan de Fragata','CN.'=>'Capitan de Navio',
                    'CAlm.'=>'Contra Almirante','VAlm.'=>'Vice Almirante','Alm'=>'Almirante'),
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
                array('name'=>'GrupoGuardia_id',
                    'value'=>'$data->grupoGuardia->descripcion',
                    'class'=>'EEditableColumn', 'editable_type'=>'select', 
			'editable_options'=>DetalleGrupoGuardia::getListGrupoGuardia(),
                    'action'=>array('/DetalleGrupoGuardia/ajaxEditColumn'),
                    'filter'=> DetalleGrupoGuardia::getListGrupoGuardia(),
		),
	),
)); ?>

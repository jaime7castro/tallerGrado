<?php
$this->breadcrumbs=array(
	'Aviso'=>array('index'),
         $id=>array('viewAA','id'=>$id),
        'Nuevo Alcande del Aviso'
);

$this->menu=array(
        array('label'=>'Ver Alcande del Aviso', 'url'=>array('viewAA', 'id'=>$id)),
);
?>	
<h1>Nuevo Alcance del Aviso</h1>

<div class="form">

<?php
    $form=$this->beginWidget('CActiveForm');?>

<p class="note">Los campos (<span class="required">*</span>) son requeridos.</p>

        <?php echo $form->errorSummary($model); ?>


        <div class="row" hidden="true">
		<?php echo $form->labelEx($model,'Aviso_id'); ?>
		<?php echo $form->dropDownList($model,'Aviso_id',array($id=>$id)); ?>
		<?php echo $form->error($model,'Aviso_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Clase_id'); ?>
		<?php echo $form->dropDownList($model,'Clase_id',CHtml::listData(Clase::model()->findAll(),'id','descripcion')); ?>
		<?php echo $form->error($model,'Clase_id'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>

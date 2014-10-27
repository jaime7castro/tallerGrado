
<?php
$this->breadcrumbs=array(
	'Aviso'=>array('index'),
         $model->Aviso_id=>array('viewAA','id'=>$model->Aviso_id),
        'Editar Alcande del Aviso'
);
$this->menu=array(
        array('label'=>'Ver Alcande del Aviso', 'url'=>array('viewAA', 'id'=>$model->Aviso_id)),
);
?>

<h1>Editar Alcance del Aviso</h1>

<div class="form">
    
<?php
    $form=$this->beginWidget('CActiveForm');?>
        
        <?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->labelEx($model,'Clase_id'); ?>
		<?php echo $form->dropDownList($model,'Clase_id',CHtml::listData(Clase::model()->findAll(),'id','descripcion')); ?>
		<?php echo $form->error($model,'Clase_id'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Editar'); ?>
	</div>

<?php
    $this->endWidget();
?>
</div>


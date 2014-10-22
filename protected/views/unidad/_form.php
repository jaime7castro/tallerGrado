<?php
/* @var $this UnidadController */
/* @var $model Unidad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unidad-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con (<span class="required">*</span>) son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'efemeride'); ?>
		<?php #echo $form->textField($model,'efemeride',array('size'=>10,'maxlength'=>10));
                $this->widget('zii.widgets.jui.CJuiDatePicker',
                    array(
                        'model'=>$model,
                        'attribute'=>'efemeride',
                        'language'=>'es',
                        'options'=>array(
                            'dateFormat'=>'dd/mm/yy',
                            'constrainInput'=>'false',
                            'duration'=>'fast',
                            'showAnim'=>'slide',
                        ),
                    )
                );
                
                ?>
		<?php echo $form->error($model,'efemeride'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Editar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
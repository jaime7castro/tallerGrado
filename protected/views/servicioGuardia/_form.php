<?php
/* @var $this ServicioGuardiaController */
/* @var $model ServicioGuardia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'servicio-guardia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con (<span class="required">*</span>) son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dia'); ?>
		<?php echo $form->dropDownList($model,'dia',array('Lunes'=>'lunes','Martes'=>'Martes',
                    'Miercoles'=>'Miercoles','Jueves'=>'Jueves','Viernes'=>'Viernes',
                    'Sabado'=>'Sabado','Domingo'=>'Domingo')); ?>
		<?php echo $form->error($model,'dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php #echo $form->textField($model,'fecha',array('size'=>10,'maxlength'=>10)); 
                $this->widget('zii.widgets.jui.CJuiDatePicker',
                    array(
                        'model'=>$model,
                        'attribute'=>'fecha',
                        'language'=>'es',
                        'options'=>array(
                            'dateFormat'=>'dd/mm/yy',
                            'constrainInput'=>'true',
                            'duration'=>'fast',
                            'showAnim'=>'slide',
                        ),
                    )
                );
                
                ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GrupoGuardia_id'); ?>
		<?php echo $form->dropDownList($model,'GrupoGuardia_id',CHtml::listData(GrupoGuardia::model()->findAll(),'id','descripcion')); ?>
		<?php echo $form->error($model,'GrupoGuardia_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Editar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
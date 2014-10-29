<?php
/* @var $this AvisoController */
/* @var $model Aviso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aviso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con (<span class="required">*</span>) son requeridos.</p>

        <br>
	<?php echo $form->errorSummary($model); ?>
        
        <div class="row">
		<?php echo $form->labelEx($model,'tipoAviso'); ?>
		<?php echo $form->dropDownList($model,'tipoAviso',array('Disposicion'=>'Disposición','Comunicado'=>'Comunicado',
                    'Consigna'=>'Consigna')); ?>
		<?php echo $form->error($model,'tipoAviso'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'Persona_codigo'); ?>
		<?php echo $form->dropDownList($model,'Persona_codigo',CHtml::listData(Persona::model()->findAll(),"codigo","fullname"),array('prompt'=>'Seleccione...')); ?>
		<?php echo $form->error($model,'Persona_codigo'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'fechaInicio'); ?>
		<?php #echo $form->textField($model,'fechaInicio',array('size'=>10,'maxlength'=>10)); 
                $this->widget('zii.widgets.jui.CJuiDatePicker',
                    array(
                        'model'=>$model,
                        'attribute'=>'fechaInicio',
                        'language'=>'es',
                        'options'=>array(
                            'dateFormat'=>'dd/mm/yy',
                            'constrainInput'=>true,
                            'duration'=>'fast',
                            'showAnim'=>'slide',
                            'selectOtherMonths'=>true,
                            'showButtonPanel'=>true,
                            'showOtherMonths'=>true, 
                            'changeMonth' => true, 
                            'changeYear' => true,
                        ),
                    )
                );
                
                ?>
		<?php echo $form->error($model,'fechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaFin'); ?>
		<?php #echo $form->textField($model,'fechaFin',array('size'=>10,'maxlength'=>10)); 
                $this->widget('zii.widgets.jui.CJuiDatePicker',
                    array(
                        'model'=>$model,
                        'attribute'=>'fechaFin',
                        'language'=>'es',
                        'options'=>array(
                            'dateFormat'=>'dd/mm/yy',
                            'constrainInput'=>true,
                            'duration'=>'fast',
                            'showAnim'=>'slide',
                            'selectOtherMonths'=>true,
                            'showButtonPanel'=>true,
                            'showOtherMonths'=>true, 
                            'changeMonth' => true, 
                            'changeYear' => true,
                        ),
                    )
                );
                
                ?>
		<?php echo $form->error($model,'fechaFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

        <br>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Editar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
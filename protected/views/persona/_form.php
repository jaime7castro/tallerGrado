<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-form',
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
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>10,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nroCi'); ?>
		<?php echo $form->textField($model,'nroCi',array('size'=>10,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nroCi'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'apPat'); ?>
		<?php echo $form->textField($model,'apPat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apPat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apMat'); ?>
		<?php echo $form->textField($model,'apMat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apMat'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->dropDownList($model,'sexo',array('H'=>'Hombre','M'=>'Mujer')); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaNac'); ?>
		<?php #echo $form->textField($model,'fechaNac',array('size'=>10,'maxlength'=>10)); 
                $this->widget('zii.widgets.jui.CJuiDatePicker',
                    array(
                        'model'=>$model,
                        'attribute'=>'fechaNac',
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
                            'defaultDate'=>'01/01/1990',
                        ),
                    )
                );
                
                ?>
		<?php echo $form->error($model,'fechaNac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edad'); ?>
		<?php echo $form->textField($model,'edad',array('size'=>10,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'edad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoSangre'); ?>
		<?php echo $form->dropDownList($model,'tipoSangre',array('O(+)'=>'O(+)','A(+)'=>'A(+)',
                    'B(+)'=>'B(+)','AB(+)'=>'AB(+)','O(-)'=>'O(-)','A(-)'=>'A(-)','B(-)'=>'B(-)','AB(-)'=>'AB(-)')); ?>
		<?php echo $form->error($model,'tipoSangre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('rows'=>3,'cols'=>62,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grado'); ?>
		<?php echo $form->dropDownList($model,'grado',array(''=>'Ninguno','Marino'=>'Marinero','M2'=>'Marinero de Segunada',
                    'M1'=>'Marinero de Primera','SI.'=>'Sargento Inicial','S2.'=>'Sargento Segundo',
                    'S1'=>'Sargento Primero','SM'=>'Sargento Mayor','SOI'=>'Suboficial Inicial',
                    'SO2'=>'Suboficial Segundo','SO1'=>'Suboficial Primero','SOM'=>'Suboficial Mayor',
                    'Alf.'=>'Alférez','TF.'=>'Teniente de Fragata','TN.'=>'Teniente de Navio',
                    'CC.'=>'Capitan de Corveta','CF.'=>'Capitan de Fragata','CN.'=>'Capitan de Navio',
                    'CAlm.'=>'Contra Almirante','VAlm.'=>'Vice Almirante','Alm'=>'Almirante')); ?>
		<?php echo $form->error($model,'grado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidad'); ?>
		<?php echo $form->dropDownList($model,'especialidad',array(''=>'Ninguno','DESN'=>'DESN','CEGIM'=>'CEGIM',
                    'CGON'=>'CGON','DEM'=>'DEM','DAEN'=>'DAEN')); ?>
		<?php echo $form->error($model,'especialidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargoUnidad'); ?>
		<?php echo $form->dropDownList($model,'cargoUnidad',array(''=>'Ninguno','Dir.'=>'Director','Cmd.'=>'Comandamte','SCmd.'=>'Sub Comandamte','J.Ope.'=>'Jefe de Operaciones',
                    'J.Log.'=>'Jefe de Logistica','J.Per.'=>'Jefe de Personal','Cmd.Cia.'=>'Comandamte de Compañia')); ?>
		<?php echo $form->error($model,'cargoUnidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Clase_id'); ?>
		<?php echo $form->dropDownList($model,'Clase_id',CHtml::listData(Clase::model()->findAll(),'id','descripcion')); ?>
		<?php echo $form->error($model,'Clase_id'); ?>
	</div>

        <br>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Editar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php
$this->breadcrumbs=array(
	'Persona'=>array('index'),
         $modelDCP->Persona_codigo=>array('viewDCP','id'=>$modelDCP->Persona_codigo),
        'Editar Contacto'
);
$this->menu=array(
        array('label'=>'Ver Contactos', 'url'=>array('viewDCP', 'id'=>$modelDCP->Persona_codigo)),
);
?>

<h2>Editar el Contacto de una Persona</h2>

<div class="form">
    
<?php
    $form=$this->beginWidget('CActiveForm');?>

<div>
    <?php echo $form->labelEx($modelDCP,'tipoContacto')?>
    <?php echo $form->dropDownList($modelDCP,'tipoContacto',array('Telefono'=>'Telefono','Celular'=>'Celular',
                'Correo electronico'=>'Correo electronico','Fax'=>'Fax')); ?>
    <?php echo $form->error($modelDCP,'tipoContacto')?>
</div>
<div>
    <?php echo $form->labelEx($modelDCP,'descripcion')?>
    <?php echo $form->textField($modelDCP,'descripcion')?>
    <?php echo $form->error($modelDCP,'descripcion')?>
</div>



<?php echo CHtml::submitButton('Editar');?>

<?php
    $this->endWidget();
?>
</div>


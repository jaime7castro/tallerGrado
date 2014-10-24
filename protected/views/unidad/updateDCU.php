
<?php
$this->breadcrumbs=array(
	'Unidad'=>array('index'),
         $modelDCU->Unidad_codigo=>array('viewDCU','id'=>$modelDCU->Unidad_codigo),
        'Editar Contacto'
);
$this->menu=array(
        array('label'=>'Ver Contactos', 'url'=>array('viewDCU', 'id'=>$modelDCU->Unidad_codigo)),
);
?>

<h2>Editar el Contacto de la Unidad</h2>

<div class="form">
    
<?php
    $form=$this->beginWidget('CActiveForm');?>

<div>
    <?php echo $form->labelEx($modelDCU,'tipoContacto')?>
    <?php echo $form->dropDownList($modelDCU,'tipoContacto',array('Telefono'=>'Telefono','Celular'=>'Celular',
                'Correo electronico'=>'Correo electronico','Fax'=>'Fax')); ?>
    <?php echo $form->error($modelDCU,'tipoContacto')?>
</div>
<div>
    <?php echo $form->labelEx($modelDCU,'descripcion')?>
    <?php echo $form->textField($modelDCU,'descripcion')?>
    <?php echo $form->error($modelDCU,'descripcion')?>
</div>



<?php echo CHtml::submitButton('Editar');?>

<?php
    $this->endWidget();
?>
</div>


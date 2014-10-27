<?php
$this->breadcrumbs=array(
	'ServicioGuardia'=>array('index'),
        $id,	
);

$this->menu=array(
        array('label'=>'Nuevo Rol de Guardia', 'url'=>array('createRG', 'id'=>$id)),
);
?>


<h1>Ver Rol de Guardia</h1>


<?php if($model) {?>
<table>
    <tr>
        <th>ID</th>
        <th>Código de la Persona</th>
        <th>Nombres</th>
        <th>Cargo en la Guardia</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php foreach ($model as $rg){  ?>
    <tr>
        <td><?php echo $rg->id; ?></td>
        
        <td><?php echo $rg->Persona_codigo; ?></td>
        <td><?php echo $rg->personaCodigo->apPat." ".$rg->personaCodigo->apMat." ".$rg->personaCodigo->nombres; ?></td>
        <td><?php echo $rg->cargoGuardia; ?></td>
        <td><?php echo CHtml::link('Editar',array('updateRG','id'=>$rg->id));?></td>
        <td><?php echo CHtml::link('Eliminar',array('deleteRG','id'=>$rg->id),array('confirm'=>'Está seguro que desea eliminar éste Rol de Guardia?'));?></td>
    </tr>
    <?php } ?>
</table>

<?php }else{ 
    echo "<h3>No existe Rol de Guardia para este Servicio de Guardia</h3>";
} 




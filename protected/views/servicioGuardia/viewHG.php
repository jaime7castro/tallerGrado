<?php
$this->breadcrumbs=array(
	'Servicio de Guardia'=>array('index'),
        $id,	
);

$this->menu=array(
        array('label'=>'Nuevo Horario de Guardia', 'url'=>array('createHG', 'id'=>$id)),
);
?>


<h1>Administrar Horario de Guardia</h1>


<?php if($model) {?>
<table>
    <tr>
        <th>ID</th>
        <th>Código de Persona</th>
        <th>Nombres</th>
        <th>Hora Inicio</th>
        <th>Hora Fin</th>
        <th>Puesto de Guardia</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php foreach ($model as $rg){  ?>
    <tr>
        <td><?php echo $rg->id; ?></td>      
        <td><?php echo $rg->Persona_codigo; ?></td>
        <td><?php echo $rg->personaCodigo->grado." ".$rg->personaCodigo->especialidad." ".$rg->personaCodigo->apPat." ".$rg->personaCodigo->apMat." ".$rg->personaCodigo->nombres; ?></td>
        <td><?php echo $rg->horaInicio; ?></td>  
        <td><?php echo $rg->horaFin; ?></td>  
        <td><?php echo $rg->puestoGuardia->descripcion; ?></td>
        <td><?php echo CHtml::link('Editar',array('updateHG','id'=>$rg->id));?></td>
        <td><?php echo CHtml::link('Eliminar',array('deleteHG','id'=>$rg->id),array('confirm'=>'Está seguro que desea eliminar éste Horario de Guardia?'));?></td>
    </tr>
    <?php } ?>
</table>

<?php }else{ 
    echo "<h3>No existe Rol de Guardia para este Servicio de Guardia</h3>";
} 




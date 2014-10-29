<?php
$this->breadcrumbs=array(
	'Persona'=>array('index'),
        $id,	
);

$this->menu=array(
        array('label'=>'Nuevo Contacto', 'url'=>array('createDCP', 'id'=>$id)),
);
?>


<h1>Ver Contactos de un Personal</h1>


<?php if($detalleContactoP) {?>
   
<table>
    <tr>
        <th>Id</th>
        <th>Apellidos y Nombres</th>
        <th>Tipo de Contacto</th>
        <th>Contacto</th>      
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php foreach ($detalleContactoP as $dc){  ?>
    <tr>
        <td><?php echo $dc->id; ?></td>
        <?php $names=$dc->personaCodigo->apPat." ".$dc->personaCodigo->apMat." ".$dc->personaCodigo->nombres?>
        <td><?php echo $names ?></td>
        <td><?php echo $dc->tipoContacto; ?></td>
        <td><?php echo $dc->descripcion; ?></td>    
        <td><?php echo CHtml::link('Editar',array('updateDCP','id'=>$dc->id));?></td>
        <td><?php echo CHtml::link('Eliminar',array('deleteDCP','id'=>$dc->id),array('confirm'=>'Está seguro que desea eliminar este contacto?'));?></td>
    </tr>
    <?php } ?>
</table>

<?php }else{ 
    echo "<h3>No existen Contactos para esta persona</h3>";
} 




<?php
$this->breadcrumbs=array(
	'Aviso'=>array('index'),
        $id,	
);

$this->menu=array(
        array('label'=>'Nuevo Alcance del Aviso', 'url'=>array('createAA', 'id'=>$id)),
);
?>


<h1>Registrar Alcance del Aviso</h1>


<?php if($model) {?>
<table>
    <tr>
        <th>ID</th>
        <th>Aviso</th>
        <th>Alcance del Aviso</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php foreach ($model as $rg){  ?>
    <tr>
        <td><?php echo $rg->id; ?></td>      
        <td><?php echo $rg->Aviso_id; ?></td> 
        <td><?php echo $rg->clase->descripcion; ?></td>
        <td><?php echo CHtml::link('Editar',array('updateAA','id'=>$rg->id));?></td>
        <td><?php echo CHtml::link('Eliminar',array('deleteAA','id'=>$rg->id),array('confirm'=>'Está seguro que desea eliminar éste Alcance?'));?></td>
    </tr>
    <?php } ?>
</table>

<?php }else{ 
    echo "<h3>No existe Alcances para este Aviso</h3>";
} 




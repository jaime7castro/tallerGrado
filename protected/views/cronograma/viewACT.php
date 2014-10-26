<?php
$this->breadcrumbs=array(
	'Cronograma'=>array('index'),
        $id,	
);

$this->menu=array(
        array('label'=>'Nueva Actividad', 'url'=>array('createACT', 'id'=>$id)),
);
?>


<h1>Ver Actividades del Cronograma</h1>


<?php if($actividad) {?>
   
<table>
    <tr>
        <th>Id</th>
        <th>Actividad</th>
        <th>Hora Inicio</th>
        <th>Hora Fin</th>
        <th>Detalle</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php foreach ($actividad as $dc){  ?>
    <tr>
        <td><?php echo $dc->id; ?></td>
        <?php $tiAct=TipoActividad::model()->findByPK($dc->TipoActividad_id);?>
        <td><?php echo $tiAct->descripcion; ?></td>
        <td><?php echo $dc->horaInicio; ?></td>
        <td><?php echo $dc->horaFin; ?></td>
        <td><?php echo $dc->detalle; ?></td>
        <td><?php echo CHtml::link('Editar',array('updateACT','id'=>$dc->id));?></td>
        <td><?php echo CHtml::link('Eliminar',array('deleteACT','id'=>$dc->id),array('confirm'=>'Está seguro que desea eliminar esta Actividad?'));?></td>
    </tr>
    <?php } ?>
</table>

<?php }else{ 
    echo "<h3>No existen actividades para este Cronograma</h3>";
} 




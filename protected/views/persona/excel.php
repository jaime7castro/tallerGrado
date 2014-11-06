<?php if($model!==null){ ?>

<table border="1">
    <tr>
        <td>Codigo</td>
        <td>CI</td>
        <td>Apellido Paterno</td>
        <td>Apellido Materno</td>
        <td>Nombres</td>
    </tr>
    <?php foreach ($model as $per) {?>
    <tr>
        <td><?php echo $per->codigo;?></td>
        <td><?php echo $per->nroCi;?></td>
        <td><?php echo $per->apPat;?></td>
        <td><?php echo $per->apMat;?></td>
        <td><?php echo $per->nombres;?></td>  
    </tr>
    <?php } ?>
</table>
<?php } ?>



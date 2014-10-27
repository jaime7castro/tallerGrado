<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<h1>CASOS DE USO</h1>";
?>
<ul>
    <li><h3>UNIDAD</h3>
        <ol>
            
            <li><?php echo CHtml::link("Registrar Unidad",$this->createUrl("/unidad/index"))?></li>
            <li><?php echo CHtml::link("Administrar material y equipos",$this->createUrl("/materialEquipo/index"))?></li>
            <li><?php echo CHtml::link("Gestionar tipo de actividad",$this->createUrl("/tipoActividad/index"))?></li>
            <li><?php echo CHtml::link("Realizar Cronograma",$this->createUrl("/cronograma/index"))?></li>
            
        </ol>
        <br>
    </li>
    <li><h3>PERSONAS</h3>
        <ul>
            <li><?php echo CHtml::link("Gestionar Persona",$this->createUrl("/persona/index"))?></li>
            <li><?php echo CHtml::link("Gestionar Estado del Personal",$this->createUrl("/estado/index"))?></li>
            <li><?php echo CHtml::link("Administrar Estado del Personal",$this->createUrl("/estadoPersona/admin"))?></li>
            
        </ul>
        <br>
    </li>
    <li><h3>SERVICIO DE GUARDIA</h3></li>
        <ul>
            <li><?php echo CHtml::link("Gestionar Puesto de Guardia",$this->createUrl("/puestoGuardia/index"))?></li>
            <li><?php echo CHtml::link("Gestionar Grupo de Guardia",$this->createUrl("/grupoGuardia/index"))?></li>
            <li><?php echo CHtml::link("Asignar Grupo de Guardia",$this->createUrl("/detalleGrupoGuardia/admin"))?></li>
            <li><?php echo CHtml::link("Registrar Servicio de Guardia",$this->createUrl("/servicioGuardia/index"))?></li>
        </ul>
        <br>
    <li><h3>REPORTES</h3></li>
</ul> 

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
            <li><?php echo CHtml::link("Gestionar tipo de actividad",$this->createUrl("/tipoActividad/index"))?></li>
            
        </ol>
        <br>
    </li>
    <li><h3>PERSONAS</h3>
        <ul>
            <li><?php echo CHtml::link("Gestionar Persona",$this->createUrl("/persona/index"))?></li>
            
        </ul>
        <br>
    </li>
    <li><h3>SERVICIO DE GUARDIA</h3></li>
    <li><h3>REPORTES</h3></li>
</ul> 

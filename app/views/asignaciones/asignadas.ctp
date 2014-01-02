<br />
<table>
<tr>
<th>No.</th>
<th>Tipo</th>
<th>Incidencia</th>
<th>Reporte</th>
<th>Prioridad</th>
<th>Descripcion</th>
<th>Limite</th>
<th>Opciones</th>
</tr>
<?php
if(empty($asignaciones)){
    ?>
    <tr><td colspan="8">No hay incidencias asignadas</td></tr>
    <?php
}else{
    $i=1;
     foreach($asignaciones as $asig):
     if(strcmp($asig['Incidencia']['estado'],'pendiente')==0){
    ?>
    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $asig['Incidencia']['tipo'];?></td>
    <td><?php echo $asig['Incidencia']['descripcion'];?></td>
    <td><?php echo $asig['Incidencia']['created'];?></td>
    <td><?php echo $asig['Incidencia']['prioridad']; ?></td>
    <td><?php echo $asig['Asignacione']['descripcion'];?></td>
    <td><?php echo $asig['Asignacione']['limite'];?></td>
    <td><?php echo $html->link('Ver',array('controller'=>'incidencias','action'=>'ver_tec',$asig['Incidencia']['id']));?></td>
    </tr>
    <?php
    $i++;
    }
    endforeach;
}
?>
</table>
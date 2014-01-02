<br />
<table>
<tr>
<th>No.</th>
<th>Tipo</th>
<th>Descripcion</th>
<th>Reporte</th>
<th>Prioridad</th>
<th>Fecha limite de soluci&oacute;n</th>
<th>Fecha solucionado</th>
<th>Opciones</th>
</tr>
<?php
if(empty($lista_in)){
    ?>
    <tr><td colspan="6">No hay incidencias en el historial</td></tr>
    <?php
}else{
    $i=1;
     foreach($lista_in as $incidencia):
    ?>
    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $incidencia['Incidencia']['tipo'];?></td>
    <td><?php echo $incidencia['Incidencia']['descripcion'];?></td>
    <td><?php echo $incidencia['Incidencia']['created'];?></td>
    <td><?php echo $incidencia['Incidencia']['prioridad']; ?></td>
    <td><?php echo $incidencia['Asignacione'][0]['limite'];?></td>
    <td><?php echo $incidencia['Solucione'][0]['created'];?></td>
    <td><?php echo $html->link('Ver',array('controller'=>'incidencias','action'=>'ver_histo',$incidencia['Incidencia']['id'])); ?></td>
    </tr>
    <?php
    $i++;
    endforeach;
}
?>
</table>
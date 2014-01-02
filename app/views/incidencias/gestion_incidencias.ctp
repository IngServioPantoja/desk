<br />
<?php
echo $html->link('Reportar incidencia',array('controller'=>'incidencias','action'=>'registrar'));?><br />
<?php echo $html->link('Autorizar repuestos',array('controller'=>'repuestos','action'=>'autorizar'));?><br />
<?php echo $html->link('Incidencias solucionadas',array('controller'=>'incidencias','action'=>'historial'));?><br /><br />
Incidencias pendientes
<table>
<tr>
<th>No.</th>
<th>Tipo</th>
<th>Descripcion</th>
<th>Reporte</th>
<th>Prioridad</th>
<th>Opciones</th>
</tr>
<?php
if(empty($lista_in)){
    ?>
    <tr><td colspan="6">No hay incidencias pendientes</td></tr>
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
    <td><?php echo $html->link('Ver',array('controller'=>'incidencias','action'=>'ver',$incidencia['Incidencia']['id']));
              echo "\t".$html->link('Asignar',array('controller'=>'asignaciones','action'=>'asignar',$incidencia['Incidencia']['id']));
              echo "\t".$html->link('Reasignar',array('controller'=>'asignaciones','action'=>'reasignar',$incidencia['Incidencia']['id']));
              echo "\t".$html->link('Eliminar',array('controller'=>'incidencias','action'=>'eliminar',$incidencia['Incidencia']['id']),array(),'Esta seguro que desea eliminar esta incidencia? (Los datos de eliminaran permanentemente del sistema)');  ?></td>
    </tr>
    <?php
    $i++;
    endforeach;
}
?>
</table>
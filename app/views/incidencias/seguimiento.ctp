<br />
<?php
echo $html->link('Reportar incidencia',array('controller'=>'incidencias','action'=>'registrar'));?><br /><br />
<table>
<tr>
<th>No.</th>
<th>Tipo</th>
<th>Descripcion</th>
<th>Reporte</th>
<th>Prioridad</th>
<th>Estado</th>
</tr>
<?php
if(empty($lista_in)){
    ?>
    <tr><td colspan="6">No hay incidencias registradas</td></tr>
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
    <td><?php echo $incidencia['Incidencia']['prioridad'];?></td>
    <td><?php echo $incidencia['Incidencia']['estado']; ?></td>
    </tr>
    <?php
    $i++;
    endforeach;
}
?>
</table>
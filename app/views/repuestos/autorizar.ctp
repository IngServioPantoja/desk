<br />
<?php echo $html->link('Historial de repuestos autorizados',array('controller'=>'repuestos','action'=>'historial'));?><br /><br />
<table>
<tr>
<th>No.</th>
<th>Tipo</th>
<th>Descripcion</th>
<th>Reporte</th>
<th>Soluci&oacute;n</th>
<th>Opciones</th>
</tr>
<?php
if(empty($lista_re)){
    ?>
    <tr><td colspan="6">No hay repuestos sin autorizar</td></tr>
    <?php
}else{
    $i=1;
     foreach($lista_re as $repuesto):
    ?>
    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $repuesto['Repuesto']['tipo'];?></td>
    <td><?php echo $repuesto['Repuesto']['descripcion'];?></td>
    <td><?php echo $repuesto['Repuesto']['created'];?></td>
    <td><?php echo $repuesto['Solucione']['descripcion']; ?></td>
    <td><?php echo "\t".$html->link('Autorizar',array('controller'=>'repuestos','action'=>'si_auto',$repuesto['Repuesto']['id']),array(),'Esta seguro que desea autorizar este repuesto?');  ?></td>
    </tr>
    <?php
    $i++;
    endforeach;
}
?>
</table>
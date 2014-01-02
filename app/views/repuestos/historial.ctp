<br />
<?php echo $html->link('Volver',array('controller'=>'repuestos','action'=>'autorizar'));?><br /><br />
<table>
<tr>
<th>No.</th>
<th>Tipo</th>
<th>Descripcion</th>
<th>Reporte</th>
<th>Soluci&oacute;n</th>
</tr>
<?php
if(empty($lista_re)){
    ?>
    <tr><td colspan="6">No hay repuestos en el historial</td></tr>
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
   </tr>
    <?php
    $i++;
    endforeach;
}
?>
</table>
<br />
Lista de Hardware y Software deshabilitado<br /><br />
<table>
<tr>
<th>No.</th>
<th>Tipo</th>
<th>Codigo</th>
<th>Descripci&oacute;n</th>
<th>Registro</th>
<th>Modificaci&oacute;n</th>
<th>Opciones</th>
</tr>
<?php
if(empty($lista_res)){
    ?>
    <tr><td colspan="7">No se encontraron resultados para su b&uacute;squeda</td></tr>
    <?php
}else{
    $i=1;
    foreach($lista_res as $componente):
    ?>
    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $componente['Almacen']['tipo'];?></td>
    <td><?php echo $componente['Almacen']['codigo'];?></td>
    <td><?php echo $componente['Almacen']['descripcion'];?></td>
    <td><?php echo $componente['Almacen']['created']; ?></td>
    <td><?php echo $componente['Almacen']['modified'];?></td>
    <td><?php echo "\t".$html->link('Habilitar',array('controller'=>'almacens','action'=>'habilitacion',$componente['Almacen']['id']),array(),'Esta seguro que desea habilitar este componente? (Al habilitarlo sus datos apareceran en las consultas dentro del sistema)');  ?></td>
    </tr>
    <?php
    $i++;
    endforeach;
}
?>
</table>
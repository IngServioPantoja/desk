<br />
Lista de Usuarios deshabilitados en el sistema.<br />
<table>
<tr>
<th>No.</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>No. Identificaci&oacute;n</th>
<th>Tipo Usuario</th>
<th>Opciones</th>
</tr>
<?php
if(empty($lista_res)){
    ?>
    <tr><td colspan="6">No se encontraron resultados para su b&uacute;squeda</td></tr>
    <?php
}else{
    $i=1;
    foreach($lista_res as $persona):
    ?>
    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $persona['datos_personales']['nombres'];?></td>
    <td><?php echo $persona['datos_personales']['apellidos'];?></td>
    <td><?php echo $persona['datos_personales']['identificacion'];?></td>
    <td><?php echo $persona['datos_personales']['tipo']; ?></td>
    <td><?php echo $html->link('Habilitar',array('controller'=>'datos_personales','action'=>'habilitacion',$persona['datos_personales']['id']),array(),'Esta seguro que desea habilitar este usuario? (Al habilitarlo, el usuario podra iniciar sesion y sus datos apareceran en las consultas dentro del sistema)');  ?></td>
    </tr>
    <?php
    $i++;
    endforeach;
}
?>
</table>
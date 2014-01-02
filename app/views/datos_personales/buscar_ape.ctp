<br />
<?php
echo $html->link('Registro de Usuarios',array('controller'=>'datos_personales','action'=>'registro'));?><br /><br />
Para realizar modificaciones o deshabilitaciones de usuarios, realize la busqueda del usuario ya sea por su
n&uacute;mero de identificaci&oacute;n, nombres, apellidos o tipo de usuario.<br /><br />
<table>
<tr>
<th><center>Buscar por No. Identificaci&oacute;n</center></th>
<th>
<?php 
echo $form->create(null,array('controller'=>'datos_personales','action'=>'buscar_ident'));
echo $form->input('identi',array('label'=>'','onKeyUp'=>"javascript:return ValNumero(this);"));?>
</th>
<th>
<?php
echo $form->end('Buscar');
?>
</th>
</tr>
<tr>
<th width="200"><center>Buscar por Nombre(s)</center></th>
<th>
<?php
echo $form->create(null,array('controller'=>'datos_personales','action'=>'buscar_nom'));
echo $form->input('nom',array('label'=>''));
?>
</th>
<th>
<?php
echo $form->end('Buscar');
?>
</th>
</tr>
<tr>
<th><center>Buscar por Apellido(s)</center></th>
<th>
<?php
echo $form->create(null,array('controller'=>'datos_personales','action'=>'buscar_ape'));
echo $form->input('ape',array('label'=>''));
?>
</th>
<th>
<?php
echo $form->end('Buscar');
?>
</th>
</tr>
<tr>
<th><center>Buscar por Tipo de Usuario</center></th>
<th>
<?php
$tipos=array('Usuario General'=>'Usuario General','Tecnico'=>'Tecnico','Almacen'=>'Almacen','Administrador'=>'Administrador');
echo $form->create(null,array('controller'=>'datos_personales','action'=>'buscar_tipo'));
echo $form->input('tip',array('label'=>'','type'=>'select','options'=>$tipos));
?>
</th>
<th>
<?php
echo $form->end('Buscar');
?>
</th>
</tr>
<tr><td><?php echo $html->link('Listar todos los usuarios del sistema',array('controller'=>'datos_personales','action'=>'buscar_todos'));?></td></tr>
</table>
<br /><br />
<b>Resultados de la B&uacute;squeda</b><br />
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
    <td><?php echo $persona['DatosPersonale']['nombres'];?></td>
    <td><?php echo $persona['DatosPersonale']['apellidos'];?></td>
    <td><?php echo $persona['DatosPersonale']['identificacion'];?></td>
    <td><?php echo $persona['DatosPersonale']['tipo']; ?></td>
    <td><?php echo $html->link('Datos Personales',array('controller'=>'datos_personales','action'=>'editar_p',$persona['DatosPersonale']['id']));
              echo "\t".$html->link('Cuenta de Usuario',array('controller'=>'datos_personales','action'=>'editar_c',$persona['DatosPersonale']['id']));
              echo "\t".$html->link('Inhabilitar',array('controller'=>'datos_personales','action'=>'inhabilitar',$persona['DatosPersonale']['id']),array(),'Esta seguro que desea inhabilitar este usuario? (Al inhabilitarlo, el usuario no podra iniciar sesion y sus datos no apareceran en las consultas dentro del sistema)');  ?></td>
    </tr>
    <?php
    $i++;
    endforeach;
}
?>
</table>
<br /><br />
<?php 
echo $html->link('Habilitar Usuarios',array('controller'=>'datos_personales','action'=>'habilitar'));
?>
<script language="javascript" type="text/javascript">
    function Solo_Numerico(variable){
        Numer=parseInt(variable);
        if (isNaN(Numer)){
            return "";
        }
        return Numer;
    }
    function ValNumero(Control){
        Control.value=Solo_Numerico(Control.value);
    }
</script>
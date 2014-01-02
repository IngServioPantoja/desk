<br />
<?php
echo $html->link('Registro de Equipos',array('controller'=>'equipos','action'=>'registro'));?><br />
<?php echo $html->link('Registro de Hardware y Software',array('controller'=>'almacens','action'=>'registro'));?><br /><br />
Para realizar modificaciones o deshabilitaciones de hardware/sofware, realize la busqueda del hardware/software ya sea por el tipo, 
codigo o descripci&oacute;n del mismo.<br /><br />
<table>
<tr>
<th><center>Buscar por Tipo</center></th>
<th>
<?php 
$hwsw=array('Hardware'=>'Hardware','Software'=>'Software');
echo $form->create(null,array('controller'=>'almacens','action'=>'buscar_tipo'));
echo $form->input('tip',array('label'=>'','type'=>'radio','options'=>$hwsw,'separator'=>'<br />','legend'=>false));?>
</th>
<th>
<?php
echo $form->end('Buscar');
?>
</th>
</tr>
<tr>
<th width="200"><center>Buscar por Codigo</center></th>
<th>
<?php
echo $form->create(null,array('controller'=>'almacens','action'=>'buscar_codigo'));
echo $form->input('cod',array('label'=>''));
?>
</th>
<th>
<?php
echo $form->end('Buscar');
?>
</th>
</tr>
<tr>
<th><center>Buscar por Descripci&oacute;n</center></th>
<th>
<?php
echo $form->create(null,array('controller'=>'almacens','action'=>'buscar_des'));
echo $form->input('des',array('label'=>''));
?>
</th>
<th>
<?php
echo $form->end('Buscar');
?>
</th>
</tr>
<tr><td><?php echo $html->link('Listar todo el hardware y software registrado en el sistema',array('controller'=>'almacens','action'=>'buscar_todos'));?></td></tr>
</table>
<br /><br />
<b>Resultados de la B&uacute;squeda</b><br />
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
    <td><?php echo $html->link('Editar',array('controller'=>'almacens','action'=>'editar',$componente['Almacen']['id']));
              echo "\t".$html->link('Inhabilitar',array('controller'=>'almacens','action'=>'inhabilitar',$componente['Almacen']['id']),array(),'Esta seguro que desea inhabilitar este componente? (Al inhabilitarlo sus datos no apareceran en las consultas dentro del sistema)');  ?></td>
    </tr>
    <?php
    $i++;
    endforeach;
}
?>
</table>
<br /><br />
<?php 
echo $html->link('Habilitar Hardware/Software',array('controller'=>'almacens','action'=>'habilitar'));
?>
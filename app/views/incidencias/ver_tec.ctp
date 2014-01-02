<br />
<fieldset><legend>Incidencia</legend>
<table>
<tr><th width="200">Tipo: </th><td><?php echo $incidencia['Incidencia']['tipo'];?></td></tr>
<tr><th>Descripci&oacute;n: </th><td><?php echo $incidencia['Incidencia']['descripcion'];?></td></tr>
<tr><th>Fecha de registro: </th><td><?php echo $incidencia['Incidencia']['created'];?></td></tr>
<tr><th>Prioridad: </th><td><?php echo $incidencia['Incidencia']['prioridad'];?></td></tr>
</table>
</fieldset>
<br />
<fieldset><legend>Datos de usuario informante</legend>
<table>
<tr><th width="200">Nombres: </th><td><?php echo $incidencia['DatosPersonale']['nombres'];?></td></tr>
<tr><th>Apellidos: </th><td><?php echo $incidencia['DatosPersonale']['apellidos'];?></td></tr>
<tr><th>No. de Identificaci&oacute;n: </th><td><?php echo $incidencia['DatosPersonale']['identificacion'];?></td></tr>
<tr><th>Telefono: </th><td><?php echo $incidencia['DatosPersonale']['telefono'];?></td></tr>
<tr><th>Direcci&oacute;n: </th><td><?php echo $incidencia['DatosPersonale']['direccion'];?></td></tr>
</table>
</fieldset>
<br />
<fieldset><legend>Informaci&oacute;n del equipo reportado</legend>
<table>
<tr><th width="210">Codigo: </th><td><?php echo $incidencia['Equipo']['codigo'];?></td></tr>
<tr><th>Descripci&oacute;n: </th><td><?php echo $incidencia['Equipo']['descripcion'];?></td></tr>
<tr><th>Dependencia (ubicaci&oacute;n): </th><td><?php echo $incidencia['Equipo']['dependencia'];?></td></tr>
</table>
</fieldset>
<fieldset><legend>Asignaci&oacute;n</legend>
<table>
<tr><th>Descripci&oacute;n: </th><td><?php echo $incidencia['Asignacione'][0]['descripcion'];?></td></tr>
<tr><th>Fecha de registro: </th><td><?php echo $incidencia['Asignacione'][0]['created'];?></td></tr>
<tr><th>Fecha de modificaci&oacute;n: </th><td><?php echo $incidencia['Asignacione'][0]['modified'];?></td></tr>
<tr><th>Fecha limite de soluci&oacute;n: </th><td><?php echo $incidencia['Asignacione'][0]['limite'];?></td></tr>
</table>
</fieldset>
<fieldset><legend>Solucion</legend>
<?php 
 if(empty($incidencia['Solucione'])){
?>
<br />
<?php
echo $html->link('Solucionar',array('controller'=>'soluciones','action'=>'solucion',$incidencia['Incidencia']['id']));
}else{
    ?>
<table>
<tr><th width="200">Descripci&oacute;n: </th><td><?php echo $incidencia['Solucione'][0]['descripcion'];?></td></tr>
<tr><th>Fecha de regsitro: </th><td><?php echo $incidencia['Solucione'][0]['created'];?></td></tr>
</table>
    <?php
}
?>
</fieldset>
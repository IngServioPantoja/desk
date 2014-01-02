<br />
<fieldset><legend>Incidencia</legend>
<table>
<tr><th width="200">Tipo: </th><td><?php echo $incidencia['Incidencia']['tipo'];?></td></tr>
<tr><th>Descripci&oacute;n: </th><td><?php echo $incidencia['Incidencia']['descripcion'];?></td></tr>
<tr><th>Fecha de registro: </th><td><?php echo $incidencia['Incidencia']['created'];?></td></tr>
<tr><th>Prioridad: </th><td><?php echo $incidencia['Incidencia']['prioridad']; if(strcmp($incidencia['Incidencia']['prioridad'],'Sin evaluar')==0){echo "\t".$html->link('Evaluar',array('controller'=>'incidencias','action'=>'evaluar',$incidencia['Incidencia']['id']));}?></td></tr>
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
<?php
if(empty($asignacion)){
    echo "Incidencia sin asignar.  ";
    echo $html->link('Asignar',array('controller'=>'asignaciones','action'=>'asignar',$incidencia['Incidencia']['id']));
}else{?>
<table>
<tr><th colspan="2"><center>Datos del Tecnico asignado</center></th></tr>
<tr><th width="240">Nombres: </th><td><?php echo $asignacion['DatosPersonale']['nombres'];?></td></tr>
<tr><th>Apellidos: </th><td><?php echo $asignacion['DatosPersonale']['apellidos'];?></td></tr>
<tr><th>No. de identificaci&oacute;n: </th><td><?php echo $asignacion['DatosPersonale']['identificacion'];?></td></tr>
<tr><th>Telefono: </th><td><?php echo $asignacion['DatosPersonale']['telefono'];?></td></tr>
<tr><th>Direcci&oacute;n: </th><td><?php echo $asignacion['DatosPersonale']['direccion'];?></td></tr>
<tr><th colspan="2"><center>Datos de la Asignaci&oacute;n</center></th></tr>
<tr><th>Descripci&oacute;n: </th><td><?php echo $incidencia['Asignacione'][0]['descripcion'];?></td></tr>
<tr><th>Fecha de registro: </th><td><?php echo $incidencia['Asignacione'][0]['created'];?></td></tr>
<tr><th>Fecha de modificaci&oacute;n: </th><td><?php echo $incidencia['Asignacione'][0]['modified'];?></td></tr>
<tr><th>Fecha limite de soluci&oacute;n: </th><td><?php echo $incidencia['Asignacione'][0]['limite'];?></td></tr>
</table>
<?php
echo $html->link('Reasignar',array('controller'=>'asignaciones','action'=>'reasignar',$incidencia['Incidencia']['id']));
}
?>
</fieldset>
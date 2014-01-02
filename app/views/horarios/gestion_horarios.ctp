<br />
Escoja un Tecnico para gestionar su horario<br /><br />
<table width="60%">
<?php
foreach($tecnicos as $tecnico):
 ?>
 <tr><th><center>
 <?php
 echo $html->link(''.$tecnico['DatosPersonale']['nombres'].' '.$tecnico['DatosPersonale']['apellidos'].'  c.c. '.$tecnico['DatosPersonale']['identificacion'].'',array('controller'=>'horarios','action'=>'ver',$tecnico['DatosPersonale']['id']));
 ?>
 </center></th></tr>
 <?php
endforeach;
?>
</table>
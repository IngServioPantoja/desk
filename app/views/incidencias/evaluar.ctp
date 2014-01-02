<br />
Seleccione el nivel de prioridad que tiene la incidencia<br /><br />
<?php 
$nivel=array('Alta'=>'Alta','Media'=>'Media','Baja'=>'Baja');
echo $form->create('Incidencia',array('controller'=>'incidencias','action'=>'evaluar_save'));
echo $form->input('prioridad',array('type'=>'radio','options'=>$nivel,'legend'=>'Nivel de prioridad','separator'=>'<br />'));
echo $form->input('inciden',array('type'=>'hidden','value'=>$incidencia_id));
echo $form->end('Aceptar');
echo $html->link('Cancelar',array('controller'=>'incidencias','action'=>'gestion_incidencias'));
?>
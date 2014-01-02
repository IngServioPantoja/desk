<br />
<?php
$repuesto=array('si'=>'Si','no'=>'No');
echo $form->create('Solucione',array('controller'=>'soluciones','action'=>'save'));
echo $form->input('descripcion');
echo $form->input('incidencia_id',array('type'=>'hidden','value'=>$incidencia_id));
echo $form->input('repuesto',array('type'=>'radio','options'=>$repuesto,'legend'=>'Necesita repuestos','separator'=>'<br />'));
echo $form->end('Aceptar');
echo $html->link('Cancelar',array('controller'=>'asignaciones','action'=>'asignadas'));
?>
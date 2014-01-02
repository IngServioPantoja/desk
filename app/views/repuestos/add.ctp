<br />
<?php
$mas=array('si'=>'Si','no'=>'No');
$tipo=array('Hardware'=>'Hardware','Software'=>'Software');
echo $form->create('Repuesto',array('controller'=>'repuestos','action'=>'save'));
echo $form->input('tipo',array('type'=>'radio','options'=>$tipo,'legend'=>'Tipo','separator'=>'<br />'));
echo $form->input('descripcion');
echo $form->input('autorizado',array('type'=>'hidden','value'=>'no'));
echo $form->input('solucione_id',array('type'=>'hidden','value'=>$id_solu));
echo $form->input('repues',array('type'=>'radio','options'=>$mas,'legend'=>'Necesita mas repuestos: ','separator'=>'<br />'));
echo $form->end('Aceptar');
echo $html->link('Cancelar',array('controller'=>'asignaciones','action'=>'asignadas'));

?>
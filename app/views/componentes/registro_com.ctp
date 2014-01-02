<br />
Registro de Componentes
<?php
$equipo_id=$this->params['named']['equipo_id'];
$tipos=array('Monitor'=>'Monitor','Teclado'=>'Teclado','Mouse'=>'Mouse','Perifericos'=>'Perifericos');//actualizar

echo $form->create('Componente',array('controller'=>'componentes','action'=>'registro_com'));
echo $form->input('codigo');
echo $form->input('descripcion');
echo $form->input('tipo',array('type'=>'radio','options'=>$tipos,'legend'=>false));
echo $form->input('equipo_id',array('type'=>'hidden','value'=>$equipo_id));
echo $form->end('Aceptar');
echo $html->link('Cancelar/Finalizar',array('controller'=>'almacens','action'=>'gestion_hwsw'));
?>
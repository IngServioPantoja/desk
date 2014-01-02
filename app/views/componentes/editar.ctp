<br />
<?php
$tipos=array('Monitor'=>'Monitor','Teclado'=>'Teclado','Mouse'=>'Mouse','Perifericos'=>'Perifericos');//actualizar

echo $form->create('Componente',array('controller'=>'componentes','action'=>'editar_save'));
echo $form->input('codigo');
echo $form->input('descripcion');
echo $form->input('tipo',array('type'=>'radio','options'=>$tipos,'legend'=>false));
echo $form->input('com_id',array('type'=>'hidden','value'=>$componente_id));
echo $form->end('Aceptar');
echo $html->link('Cancelar/Finalizar',array('controller'=>'almacens','action'=>'gestion_hwsw'));
?>
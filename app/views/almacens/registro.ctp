<br />
<?php
$tipos=array('Hardware'=>'Hardware','Software'=>'Software');

echo $form->create('Almacen',array('controller'=>'almacens','action'=>'registro'));
echo $form->input('tipo',array('type'=>'radio','options'=>$tipos,'separator'=>'<br />'));
echo $form->input('codigo');
echo $form->input('descripcion');
echo $form->end('Aceptar');
echo $html->link('Cancelar',array('controller'=>'almacens','action'=>'gestion_hwsw'));
?>
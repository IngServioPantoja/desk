<br />
<?php
$dependencias=array('Sala 1'=>'Sala 1','Sala 2'=>'Sala 2','Sala 3'=>'Sala 3');//actualizar

echo $form->create('Equipo',array('controller'=>'equipos','action'=>'editar_save'));
echo $form->input('codigo');
echo $form->input('descripcion');
echo $form->input('dependencia',array('type'=>'select','options'=>$dependencias));
echo $form->input('datos_personale_id',array('label'=>'Encargado','type'=>'select','options'=>$tecnicos));
echo $form->input('iden',array('type'=>'hidden','value'=>$id_equipo));
echo $form->end('Aceptar');
echo $html->link('Cancelar',array('controller'=>'almacens','action'=>'gestion_hwsw'));
?>
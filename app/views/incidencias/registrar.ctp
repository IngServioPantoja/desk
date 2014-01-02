<br />
<?php
$tipos=array('Hardware'=>'Hardware','Software'=>'Software');

echo $form->create('Incidencia',array('controller'=>'incidencias','action'=>'registrar'));
echo $form->input('tipo',array('type'=>'radio','options'=>$tipos,'legend'=>'Tipo de Incidencia'));
echo $form->input('descripcion');
echo $form->input('prioridad',array('type'=>'hidden','value'=>'Sin evaluar'));
echo $form->input('estado',array('type'=>'hidden','value'=>'pendiente'));
echo $form->input('datos_personale_id',array('type'=>'hidden','value'=>$id_p));
echo $form->input('equipo_id',array('type'=>'select','options'=>$lista_equipos,'label'=>'Equipo'));
echo $form->end('Aceptar');
if(strcmp($tipo_p,'Administrador')>=0){
    echo $html->link('Cancelar',array('controller'=>'incidencias','action'=>'gestion_incidencias'));
}else{
    echo $html->link('Cancelar',array('controller'=>'users','action'=>'inicio'));
}
?>
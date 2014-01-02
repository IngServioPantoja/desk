<br />
<?php
$meses=array('01'=>'Enero','02'=>'Febrero','03'=>'Marzo','04'=>'Abril','05'=>'Mayo','06'=>'Junio','07'=>'Julio','08'=>'Agosto','09'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre');

echo $form->create('Asignacione',array('controller'=>'asignaciones','action'=>'reasignar'));
echo $form->input('descripcion');
echo $form->input('limite',array('type'=>'date','label'=>'Fecha limite de solucion','minYear'=>date('Y'),'maxYear'=>date('Y'),'monthNames'=>$meses,'dateFormat'=>'YMD'));
echo $form->input('incidencia_id',array('type'=>'hidden','value'=>$incidencia_id)); 
echo $form->input('datos_personale_id',array('type'=>'select','options'=>$lista_tec,'label'=>'Tecnico asignado'));
echo $form->end('Aceptar');
echo $html->link('Cancelar',array('controller'=>'incidencias','action'=>'gestion_incidencias'));
?>
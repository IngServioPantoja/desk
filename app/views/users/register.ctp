<br />
<?php
$id_persona=$this->params['named']['id_persona'];
echo $form->create('User',array('controller'=>'users','action'=>'register'));
echo $form->input('username', array('label'=>'Nombre de usuario'));
echo $form->input('password',array('value'=>''));
echo $form->input('password_confirm',array('type'=>'password','value'=>'','label'=>'Confirmar password'));
echo $form->input('id_persona',array('type'=>'hidden','value'=>$id_persona));
echo $form->end('Aceptar');
   
?>
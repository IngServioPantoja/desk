<br />
<fieldset><legend>Cuenta de Usuario</legend>
<?php
echo $form->create('User',array('controller'=>'users','action'=>'editar_c'));
echo $form->input('username', array('label'=>'Nombre de usuario','value'=>$username));
?>
<br /> Es necesario que ingrese la contrase&ntilde;a para realizar los cambios. <br />
Si desea cambiar la contrase&ntilde;a puede realizarlo en este espacio.<br />
<?php
echo $form->input('password',array('value'=>''));
echo $form->input('password_confirm',array('type'=>'password','value'=>'','label'=>'Confirmar password'));
echo $form->input('id_user',array('type'=>'hidden','value'=>$user_id));
echo $form->end('Aceptar');
echo $html->link('Cancelar',array('controller'=>'datos_personales','action'=>'gestion_usuarios'));
   
?>
</fieldset>
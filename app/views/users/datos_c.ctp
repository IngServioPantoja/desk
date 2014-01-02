<br />
<?php

echo $form->create('User',array('controller'=>'users','action'=>'datos_c'));
echo $form->input('username', array('label'=>'Nombre de usuario','value'=>$username));
?>
<br /> Es necesario que ingrese la contrase&ntilde;a para realizar los cambios. <br />
Si desea cambiar su contrase&ntilde;a puede realizarlo en este espacio.<br />
<?php
echo $form->input('password',array('value'=>''));
echo $form->input('password_confirm',array('type'=>'password','value'=>'','label'=>'Confirmar password'));
echo $form->end('Aceptar');
echo $html->link('Cancelar',array('controller'=>'users','action'=>'inicio'));
   
?>
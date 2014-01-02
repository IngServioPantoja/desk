<?php $this->layout='index';?>
<br /><center><b>Bienvenido</b></center>
<br />

<b >Ingreso al sistema</b>
<?php 
   echo $form->create('User',array('controller'=>'users','action'=>'login'));
   echo $form->input('username',array('label'=>'Nombre de usuario'));
   echo $form->input('password');
   echo $form->end('Ingresar');
?>
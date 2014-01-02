<br />
<?php
$tipos=array('Usuario General'=>'Usuario General','Tecnico'=>'Tecnico','Almacen'=>'Almacen','Administrador'=>'Administrador');
echo $form->create('DatosPersonale',array('controller'=>'datos_personales','action'=>'registro'));
echo $form->input('nombres');
echo $form->input('apellidos');
echo $form->input('identificacion',array('label'=>'Numero de identificacion','onKeyUp'=>"javascript:return ValNumero(this);"));
echo $form->input('tipo',array('type'=>'radio','options'=>$tipos,'legend'=>'Tipo de Usuario'));
echo $form->input('telefono',array('onKeyUp'=>"javascript:return ValNumero(this);"));
echo $form->input('direccion');
echo $form->end('Aceptar');
echo $html->link('Cancelar',array('controller'=>'datos_personales','action'=>'gestion_usuarios'));
?>
<script language="javascript" type="text/javascript">
    function Solo_Numerico(variable){
        Numer=parseInt(variable);
        if (isNaN(Numer)){
            return "";
        }
        return Numer;
    }
    function ValNumero(Control){
        Control.value=Solo_Numerico(Control.value);
    }
</script>
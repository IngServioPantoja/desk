<br />
<?php
echo $form->create('DatosPersonale',array('controller'=>'datos_personales','action'=>'datos_p'));
echo $form->input('nombres',array('value'=>$nombres));
echo $form->input('apellidos',array('value'=>$apellidos));
echo $form->input('identificacion',array('label'=>'Numero de identificacion','value'=>$identificacion,'onKeyUp'=>"javascript:return ValNumero(this);"));
echo $form->input('telefono',array('value'=>$telefono,'onKeyUp'=>"javascript:return ValNumero(this);"));
echo $form->input('direccion',array('value'=>$direccion));
echo $form->end('Guardar');
echo $html->link('Cancelar',array('controller'=>'users','action'=>'inicio'));
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

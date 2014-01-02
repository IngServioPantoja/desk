<?php
Class User extends AppModel{
    var $name='User';
    
    var $hasMany=array('DatosPersonale');
    
    var $validate=array(
        'username'=>array(
            'vacio'=>array(
                'rule'=>'notEmpty',
                'message'=>'Este campo no puede estar vacio'
            ),
            'unico'=>array(
                'rule'=>'isUnique',
                'message'=>'Este nombre de usuario ya ha sido asignado'
            )
        ),
        'password'=>array(
            'rule'=>'notEmpty',
            'message'=>'Este campo no puede estar vacio'
        )
    );
}
?>
<?php

Class Almacen extends AppModel{
    var $name='Almacen';
    
    var $hasMany =array('Equipo');
    
    var $validate=array(
        'tipo'=>array(
            'rule'=>'notEmpty',
            'message'=>'Este campo no puede estar vacio'
        ),
        'codigo'=>array(
            'rule'=>'notEmpty',
            'message'=>'Este campo no puede estar vacio'
        ),
        'descripcion'=>array(
            'rule'=>'notEmpty',
            'message'=>'Este campo no puede estar vacio'
        )
    );
    
}
?>
<?php

Class DatosPersonale extends AppModel{
    var $name='DatosPersonale';
    
    var $belongsTo=array('User');
    
    var $hasMany=array('Horario','Equipo','Incidencia','Asignacione');
    
    var $validate=array(
        'nombres'=>array(
            'rule'=>'notEmpty',
            'message'=>'Este campo no puede estar vacio'
        ),
        'apellidos'=>array(
            'rule'=>'notEmpty',
            'message'=>'Este campo no puede estar vacio'
        ),
        'identificacion'=>array(
            'rule'=>'notEmpty',
            'message'=>'Este campo no puede estar vacio'
        ),
        'telefono'=>array(
            'rule'=>'notEmpty',
            'message'=>'Este campo no puede estar vacio'
        ),
        'direccion'=>array(
            'rule'=>'notEmpty',
            'message'=>'Este campo no puede estar vacio'
        )
        
    );
    
}
?>
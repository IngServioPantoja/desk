<?php
Class Equipo extends AppModel{
    var $name='Equipo';
    
    var $belongsTo=array('DatosPersonale','Almacen');
    
    var $hasMany=array('Componente','Incidencia');
    
    var $validate=array(
        'codigo'=>array(
            'rule'=>'notEmpty',
            'message'=>'Este campo no puede estar vacio'
        ),
        'descripcion'=>array(
            'rule'=>'notEmpty',
            'message'=>'Este campo no puede estar vacio'
        ),
        'dependencia'=>array(
            'rule'=>'notEmpty',
            'message'=>'Este campo no puede estar vacio'
        ),
        'datos_personale_id'=>array(
            'rule'=>'notEmpty',
            'message'=>'Este campo no puede estar vacio'
        )
    );
}
?>
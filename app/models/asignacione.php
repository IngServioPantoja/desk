<?php

Class Asignacione extends AppModel{
    var $name='Asignacione';
    
    var $belongsTo=array('Incidencia','DatosPersonale');
    
    var $validate=array(
        'descripcion'=>array(
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
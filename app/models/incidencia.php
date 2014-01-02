<?php
Class Incidencia extends AppModel{
    var $name='Incidencia';
    
    var $belongsTo=array('DatosPersonale','Equipo');
    
    var $hasMany=array('Solucione','Asignacione');
    
    var $validate=array(
        'tipo'=>array(
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
<?php
Class Solucione extends AppModel{
    var $name='Solucione';
    
    var $belongsTo=array('Incidencia');
    
    var $hasMany=array('Repuesto');
    
    var $validate=array(
        'descripcion'=>array(
            'rule'=>'notEmpty',
            'message'=>'Este campo no puede estar vacio'
        )
    );
}
?>
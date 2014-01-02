<?php
Class Repuesto extends AppModel{
    var $name='Repuesto';
    
    var $belongsTo=array('Solucione');
    
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
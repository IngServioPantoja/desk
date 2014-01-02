<?php
Class HorariosController extends AppController{
    var $name='Horarios';
    var $components=array('Auth');
    var $helpers=array('Form','Html'); 
 
    function gestion_horarios(){
        $this->set('title_for_layout','Gestion de horarios de Tecnicos');
        $this->loadModel('DatosPersonale');
        $tecnicos=$this->DatosPersonale->find('all',array('field'=>array('DatosPersonale.id','DatosPersonale.nombres','DatosPersonale.apellidos','DatosPersonale.identificacion'),'conditions'=>array('DatosPersonale.tipo like'=>'%Tecnico%','DatosPersonale.estado'=>0)));
        $this->set('tecnicos',$tecnicos); 
    } 
    
    function ver($id_tec=null){
        $this->set('title_for_layout','Horarios de Tecnicos');
        $this->loadModel('DatosPersonale');
        $tecnico=$this->DatosPersonale->find('first',array('conditions'=>array('DatosPersonale.id'=>$id_tec)));
        $this->set('tecnico',$tecnico);
        $horario=$this->Horario->find('all',array('conditions'=>array('Horario.datos_personale_id'=>$id_tec)));
        $this->set('horario',$horario);
    }  
    
    function add(){
        $dia=$this->params['named']['dia'];
        $hora=$this->params['named']['hora'];
        $id_tec=$this->params['named']['id_tec'];
        $this->Horario->create();
        $this->Horario->save(array('datos_personale_id'=>$id_tec,'dia'=>$dia,'hora'=>$hora,));
        $this->redirect(array('controller'=>'horarios','action'=>'ver',$id_tec));
    }
    
    function eliminar(){
        $id_h=$this->params['named']['id_h'];
        $id_tec=$this->params['named']['id_tec'];
        $this->Horario->id=$id_h;
        $this->Horario->delete();
        $this->redirect(array('controller'=>'horarios','action'=>'ver',$id_tec));
    }
    
    function ver_tec(){
        $this->set('title_for_layout','Horario');
        $id_u=$this->Session->read('Auth.User.id');
        $this->loadModel('DatosPersonale');
        $id_tec=$this->DatosPersonale->field('DatosPersonale.id',array('DatosPersonale.user_id'=>$id_u));
        $horario=$this->Horario->find('all',array('conditions'=>array('Horario.datos_personale_id'=>$id_tec)));
        $this->set('horario',$horario);
    }
}
?>
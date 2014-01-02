<?php
Class IncidenciasController extends AppController{
    var $name='Incidencias';
    var $components=array('Auth');
    var $helpers=array('Form','Html');
    
    function gestion_incidencias(){
        $this->set('title_for_layout','Gestion de Incidencias');
        $lista_in=$this->Incidencia->find('all',array('conditions'=>array('NOT'=>array('Incidencia.estado like'=>'%Solucionado%'))));
        $this->set('lista_in',$lista_in);
    } 
    
    function registrar(){
        $this->set('tile_for_layout','Reportar Incidencia');
        $this->loadModel('Equipo');
        $equipos=$this->Equipo->find('all',array('conditions'=>array('Equipo.estado'=>0)));
        $lista_equipos=array();
        $id_equipo=0;
        foreach($equipos as $equipo):
            $id_equipo=$equipo['Equipo']['id'];
            $lista_equipos[$id_equipo]=$equipo['Equipo']['codigo'];
        endforeach;
        $this->set('lista_equipos',$lista_equipos);//lista de equipos
        $id_c=$this->Session->read('Auth.User.id');//id de la cuenta activa
        $this->loadModel('DatosPersonale');
        $id_p=$this->DatosPersonale->field('DatosPersonale.id',array('DatosPersonale.user_id'=>$id_c));//id de los datos personales de la cuenta activa
        $this->set('id_p',$id_p);
        $tipo_p=$this->DatosPersonale->field('DatosPersonale.tipo',array('DatosPersonale.id'=>$id_p));
        $this->set('tipo_p',$tipo_p);
        if(!empty($this->data)){
            $this->Incidencia->create();
            if($this->Incidencia->save($this->data)){
                $this->Session->setFlash('Registro exitoso de incidencia');
            }else{
                $this->Session->setFlash('Error al realizar el registro');
            }
            if(strcmp($tipo_p,'Administrador')==0){
                $this->redirect(array('controller'=>'incidencias','action'=>'gestion_incidencias'));
            }else{
                $this->redirect(array('controller'=>'incidencias','action'=>'seguimiento'));
            }
        }
       
    }
    
    function historial(){
        $this->set('title_for_layout','Incidencias solucionadas');
        $lista_in=$this->Incidencia->find('all',array('conditions'=>array('Incidencia.estado like'=>'%solucionado%'),'order'=>'Incidencia.created ASC'));
        $this->set('lista_in',$lista_in);
    }
    
    function ver_histo($incidencia_id=null){
        $this->set('title_for_layout','Informacion de incidencia solucionada');
        $incidencia=$this->Incidencia->find('first',array('conditions'=>array('Incidencia.id'=>$incidencia_id)));
        $this->set('incidencia',$incidencia);    
    }
    
    function ver($incidencia_id=null){
        $this->set('title_for_layout','Informacion de incidencia');
        $incidencia=$this->Incidencia->find('first',array('conditions'=>array('Incidencia.id'=>$incidencia_id)));
        $this->set('incidencia',$incidencia);
        if(sizeof($incidencia['Asignacione'])>0){
            $this->loadModel('DatosPersonale');
            $id_tecnico=$incidencia['Asignacione'][0]['datos_personale_id'];
            $asignacion=$this->DatosPersonale->find('first',array('conditions'=>array('DatosPersonale.id'=>$id_tecnico)));
        }else{
            $asignacion='';
        }
        $this->set('asignacion',$asignacion);
    }
    
    function eliminar($incidencia_id=null){
        $this->Incidencia->id=$incidencia_id;
        $this->Incidencia->delete();
        $this->Session->setFlash('Incidencia eliminada');
        $this->redirect(array('controller'=>'incidencias','action'=>'gestion_incidencias'));
    }
    
    function evaluar($incidencia_id=null){
        $this->set('title_for_layout','Evaluar prioridad de incidencia');
        $this->set('incidencia_id',$incidencia_id); 
     }   
        
    function evaluar_save(){  
       if(!empty($this->data)) {
            $this->Incidencia->id=$this->data['Incidencia']['inciden'];
            if($this->Incidencia->saveField('prioridad',$this->data['Incidencia']['prioridad'])){
                $this->Session->setFlash('Registro exitoso');
                $this->redirect(array('controller'=>'incidencias','action'=>'gestion_incidencias'));
            }else{
                $this->Session->setFlash('Error en el registro. Vuelva a intentarlo en un momento');
                $this->redirect(array('controller'=>'incidencias','action'=>'gestion_incidencias'));
            }
        }
    }
    
    function ver_tec($incidencia_id=null){
        $this->set('title_for_layout','Informacion de incidencia');
        $incidencia=$this->Incidencia->find('first',array('conditions'=>array('Incidencia.id'=>$incidencia_id)));
        $this->set('incidencia',$incidencia);
    }
    
    function seguimiento(){
        $this->set('title_for_layout','Seguimiento de incidencias');
        $id_u=$this->Session->read('Auth.User.id');
        $this->loadModel('DatosPersonale');
        $id_usu=$this->DatosPersonale->field('DatosPersonale.id',array('DatosPersonale.user_id'=>$id_u));
        $incidencias=$this->Incidencia->find('all',array('conditions'=>array('Incidencia.datos_personale_id'=>$id_usu)));
        $this->set('lista_in',$incidencias);
    }
    
}
?>
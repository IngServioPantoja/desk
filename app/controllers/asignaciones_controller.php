<?php
Class AsignacionesController extends AppController{
    var $name='Asignaciones';
    var $components=array('Auth');
    var $helpers=array('Form','Html');
    
    function asignar($incidencia_id=null){
        $this->set('title_for_layout','Asignar incidencia');
        if(empty($this->data)){
            $this->loadModel('DatosPersonale');
            $tecnicos=$this->DatosPersonale->find('all',array('conditions'=>array('DatosPersonale.tipo like'=>'%Tecnico%','DatosPersonale.estado'=>0)));
            $lista_tec=array();
            foreach($tecnicos as $tec):
                $id_tec=$tec['DatosPersonale']['id'];
                $lista_tec[$id_tec]="".$tec['DatosPersonale']['nombres']." ".$tec['DatosPersonale']['apellidos']."";
            endforeach;
            $this->set('incidencia_id',$incidencia_id);
            $this->set('lista_tec',$lista_tec);
        }else{
            $this->Asignacione->create();
            if($this->Asignacione->save($this->data)){
                $this->Session->setFlash('Asignacion exitosa');
            }else{
                $this->Session->setFlash('Error al registrar la asignacion. Vuelva a intentarlo en un momento');
            }
            $this->redirect(array('controller'=>'incidencias','action'=>'gestion_incidencias'));
        }
    }
    
    function reasignar($incidencia_id=null){
        $this->set('title_for_layout','Reasignar incidencias');
        if(empty($this->data)){
            $asignacion_id=$this->Asignacione->field('Asignacione.id',array('Asignacione.incidencia_id'=>$incidencia_id));
            $this->Asignacione->id=$asignacion_id;
            $this->data=$this->Asignacione->read();
            $this->loadModel('DatosPersonale');
            $tecnicos=$this->DatosPersonale->find('all',array('conditions'=>array('DatosPersonale.tipo like'=>'%Tecnico%','DatosPersonale.estado'=>0)));
            $lista_tec=array();
            foreach($tecnicos as $tec):
                $id_tec=$tec['DatosPersonale']['id'];
                $lista_tec[$id_tec]="".$tec['DatosPersonale']['nombres']." ".$tec['DatosPersonale']['apellidos']."";
            endforeach;
            $this->set('incidencia_id',$incidencia_id);
            $this->set('lista_tec',$lista_tec);
        }else{
            if($this->Asignacione->save($this->data)){
                $this->Session->setFlash('Asignacion exitosa');
            }else{
                $this->Session->setFlash('Error al registrar la asignacion. Vuelva a intentarlo en un momento');
            }
            $this->redirect(array('controller'=>'incidencias','action'=>'gestion_incidencias'));
        }
    }
    
    function asignadas(){
        $this->set('title_for_layout','Incidencias asignadas');
        $id_user=$this->Session->read('Auth.User.id');
        $this->loadModel('DatosPersonale');
        $id_tec=$this->DatosPersonale->field('DatosPersonale.id',array('DatosPersonale.user_id'=>$id_user));
        $asignaciones=$this->Asignacione->find('all',array('conditions'=>array('Asignacione.datos_personale_id'=>$id_tec)));
        $this->set('asignaciones',$asignaciones);   
    }
}
?>
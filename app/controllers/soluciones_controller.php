<?php
Class SolucionesController extends AppController{
    var $name='Soluciones';
    var $components=array('Auth');
    var $helpers=array('Form','Html'); 
    
    function solucion($incidencia_id=null){
        $this->set('title_for_layout','Reportar solucion');
        $this->set('incidencia_id',$incidencia_id);
    }
    
    function save(){
        if(!empty($this->data['Solucione']['repuesto'])){
        if(!empty($this->data)){
            $this->Solucione->create();
            if($this->Solucione->save($this->data)){
                $id_solu=mysql_insert_id();
                $incidencia_id=$this->data['Solucione']['incidencia_id'];
                $this->loadModel('Incidencia');
                $this->Incidencia->id=$incidencia_id;
                $this->Incidencia->saveField('estado','solucionado');
                $repuesto=$this->data['Solucione']['repuesto'];
                if(strcmp($repuesto,'si')==0){
                    $this->Session->setFlash('Solucion registrada');
                    $this->redirect(array('controller'=>'repuestos','action'=>'add',$id_solu));
                }else{
                    $this->Session->setFlash('Solucion registrada con exito');
                    $this->redirect(array('controller'=>'asignaciones','action'=>'asignadas'));
                }
            }else{
                $this->Session->setFlash('Error al guardar los datos. Vuelva a intentarlo en un momento');
                $this->redirect(array('controller'=>'asignaciones','action'=>'asignadas'));
            }
        }else{
            $this->Session->setFlash('Datos incompletos');
            $this->redirect(array('controller'=>'asignaciones','action'=>'asignadas'));
        }
    }else{
        $this->Session->setFlash('Debe completar todos los campos');
        $this->redirect(array('controller'=>'asignaciones','action'=>'asignadas'));
    }
    }
}
?>
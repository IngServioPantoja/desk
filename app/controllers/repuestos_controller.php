<?php
Class RepuestosController extends AppController{
    var $name='Repuestos';
    var $components=array('Auth');
    var $helpers=array('Form','Html'); 
    
    function add($id_solu=null){
        $this->set('title_for_layout','Solicitud de repuesto');
        $this->set('id_solu',$id_solu);
    }
    
    function save(){
        if(!empty($this->data['Repuesto']['repues'])){
            $this->Repuesto->create();
            if($this->Repuesto->save($this->data)){
                $mas=$this->data['Repuesto']['repues'];
                if(strcmp($mas,'si')==0){
                    $this->Session->setFlash('Registro exitoso');
                    $this->redirect(array('controller'=>'repuestos','action'=>'add',$this->data['Repuesto']['solucione_id']));
                }else{
                    $this->Session->setFlash('Registro exitoso');
                    $this->redirect(array('controller'=>'asignaciones','action'=>'asignadas'));
                }
            }
        }else{
            $this->Session->setFlash('Datos incompletos');
            $this->redirect(array('controller'=>'repuestos','action'=>'add',$this->data['Repuesto']['solucione_id']));
        }
        
    }
    
    function autorizar(){
        $this->set('title_for_layout','Autorizacion de repuestos');
        $lista_re=$this->Repuesto->find('all',array('conditions'=>array('Repuesto.autorizado like'=>'%no%')));
        $this->set('lista_re',$lista_re);    
    }
    
    function si_auto($repuesto_id=null){
        $this->Repuesto->id=$repuesto_id;
        $this->Repuesto->saveField('autorizado','si');
        $this->Session->setFlash('Repuesto autorizado');
        $this->redirect(array('controller'=>'repuestos','action'=>'autorizar'));
    }
    
    function historial(){
        $this->set('title_for_layout','Historial de repuestos autorizados');
        $lista_re=$this->Repuesto->find('all',array('conditions'=>array('Repuesto.autorizado like'=>'%si%')));
        $this->set('lista_re',$lista_re);
    }
}
?>
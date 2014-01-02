<?php
Class ComponentesController extends AppController{
    var $name='Componentes';
    var $components=array('Auth');
    var $helpers=array('Form','Html'); 
    
    function registro_com(){
        $this->set('title_for_layout','Registro de equipos');
        if(!empty($this->data)){
            if($this->Componente->save($this->data)){
                $id_compo=mysql_insert_id();
                $this->loadModel('Almacen');
                $this->Almacen->create();
                $this->Almacen->save(array('tipo'=>'Hardware','codigo'=>$this->data['Componente']['codigo'],'descripcion'=>$this->data['Componente']['descripcion']));
                $id_almacen=mysql_insert_id();
                $this->Componente->id=$id_compo;
                $this->Componente->saveField('almacen_id',$id_almacen);
                $this->Session->setFlash('Registro exitoso del Componente');
                $this->redirect(array('controller'=>'componentes','action'=>'registro_com','equipo_id'=>$this->data['Componente']['equipo_id']));  
            }else{
                $this->Session->setFlash('Error al realizar el registro. Vuelva a intentarlo en un momento');
                $this->redirect(array('controller'=>'almacens','action'=>'gestion_hwsw'));
            }
        }
    }
    
    function editar(){
        $this->set('title_for_layout','Editar datos de Componentes');
        $componente_id=$this->params['named']['id_componente'];
        $this->set('componente_id',$componente_id);
        $this->Componente->id=$componente_id;
        $this->data=$this->Componente->read();
    }
    
    function editar_save(){
        if(!empty($this->data)){
            $id_com=$this->data['Componente']['com_id'];
            $this->Componente->id=$id_com;
            if($this->Componente->save($this->data)){
                $id_almacen=$this->Componente->field('Componente.almacen_id',array('Componente.id'=>$id_com));
                $this->loadModel('Almacen');
                $this->Almacen->id=$id_almacen;
                $this->Almacen->save(array('codigo'=>$this->data['Componente']['codigo'],'descripcion'=>$this->data['Componente']['descripcion']));
                $this->Session->setFlash('Datos editados con exito');
                $this->redirect(array('controller'=>'almacens','action'=>'gestion_hwsw'));
            }else{
                $this->Session->setFlash('Error al realizar la edicion');
                $this->redirect(array('controller'=>'almacens','action'=>'gestion_hwsw'));
            }
            
        }
    }
    
    
    
}
?>
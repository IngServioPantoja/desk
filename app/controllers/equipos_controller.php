<?php
Class EquiposController extends AppController{
    var $name='Equipos';
    var $components=array('Auth');
    var $helpers=array('Form','Html'); 
    
    function registro(){
        $this->set('title_for_layout','Registro de Equipos');
        $this->loadModel('DatosPersonale');
        $tecnicos=$this->DatosPersonale->find('all',array('fields'=>array('DatosPersonale.id','DatosPersonale.nombres','DatosPersonale.apellidos'),'conditions'=>array('DatosPersonale.tipo'=>'Tecnico','DatosPersonale.estado'=>0)));
        $lista_tec=array();
        foreach($tecnicos as $tecnico):
            $id=$tecnico['DatosPersonale']['id'];
            $lista_tec[$id]="".$tecnico['DatosPersonale']['nombres']." ".$tecnico['DatosPersonale']['apellidos']."";    
        endforeach;
        $this->set('tecnicos',$lista_tec); 
    }
    
    function registro_cpu(){
        if(!empty($this->data)){
            $this->Equipo->create();
            if($this->Equipo->save($this->data)){
                $id_equipo=mysql_insert_id();
                $this->loadModel('Almacen');
                $this->Almacen->create();
                $this->Almacen->save(array('tipo'=>'Hardware','codigo'=>$this->data['Equipo']['codigo'],'descripcion'=>$this->data['Equipo']['descripcion']));
                $id_almacen=mysql_insert_id();
                $this->Equipo->id=$id_equipo;
                $this->Equipo->saveField('almacen_id',$id_almacen);
                $this->Session->setFlash('Registro exitoso de la CPU');
                $this->redirect(array('controller'=>'componentes','action'=>'registro_com','equipo_id'=>$id_equipo));  
            }else{
                $this->Session->setFlash('Error al realizar el registro. Vuelva a intentarlo en un momento');
                $this->redirect(array('controller'=>'almacens','action'=>'gestion_hwsw'));
            }
        }
    }
    
    function editar(){
        $this->set('title_for_layout','Editar Datos de Equipo');
        $id_equipo=$this->params['named']['id_equipo'];
        $this->set('id_equipo',$id_equipo);
        $this->Equipo->id=$id_equipo;
        $this->data=$this->Equipo->read();
        $this->loadModel('DatosPersonale');
        $tecnicos=$this->DatosPersonale->find('all',array('fields'=>array('DatosPersonale.id','DatosPersonale.nombres','DatosPersonale.apellidos'),'conditions'=>array('DatosPersonale.tipo'=>'Tecnico','DatosPersonale.estado'=>0)));
        $lista_tec=array();
        foreach($tecnicos as $tecnico):
            $id=$tecnico['DatosPersonale']['id'];
            $lista_tec[$id]="".$tecnico['DatosPersonale']['nombres']." ".$tecnico['DatosPersonale']['apellidos']."";    
        endforeach;
        $this->set('tecnicos',$lista_tec); 
    }
    
    function editar_save(){
        if(!empty($this->data)){
            $id_equipo=$this->data['Equipo']['iden'];
            $this->Equipo->id=$id_equipo;
            if($this->Equipo->save($this->data)){
                $id_almacen=$this->Equipo->field('Equipo.almacen_id',array('Equipo.id'=>$id_equipo));
                $this->loadModel('Almacen');
                $this->Almacen->id=$id_almacen;
                $this->Almacen->save(array('codigo'=>$this->data['Equipo']['codigo'],'descripcion'=>$this->data['Equipo']['descripcion']));
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
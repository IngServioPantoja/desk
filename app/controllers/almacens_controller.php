<?php
Class AlmacensController extends AppController{
    var $name='Almacens';
    var $components=array('Auth');
    var $helpers=array('Form','Html');
    
    function gestion_hwsw(){
        $this->set('title_for_layout','Gestion de Hardware y Software');
    } 
    
    function registro(){
        $this->set('title_for_layout','Registro de Hardware y Software');
        if(!empty($this->data)){
            $this->Almacen->create();
            if($this->Almacen->save($this->data)){
                $this->Session->setFlash('Registro exitoso');
                $this->redirect(array('controller'=>'almacens','action'=>'gestion_hwsw'));
            }
        }
    }
    
    function buscar_tipo(){
        $this->set('title_for_layout','Gestion de Hardware y Software');
        if(!empty($this->data['Almacen']['tip'])){
            $lista_res=$this->Almacen->find('all',array('conditions'=>array('Almacen.tipo'=>$this->data['Almacen']['tip'],'Almacen.estado'=>0)));
            $this->set('lista_res',$lista_res);
        }else{
            $this->Session->setFlash('Es necesario que escoja un tipo de componente para realizar la busqueda');
            $this->redirect(array('controller'=>'almacens','action'=>'gestion_hwsw'));
        }
    }
    
    function buscar_codigo(){
        $this->set('title_for_layout','Gestion de Hardware y Software');
        if(!empty($this->data['Almacen']['cod'])){
            $lista_res=$this->Almacen->find('all',array('conditions'=>array('Almacen.codigo like'=>'%'.$this->data['Almacen']['cod'].'%','Almacen.estado'=>0)));
            $this->set('lista_res',$lista_res);
        }else{
            $this->Session->setFlash('Es necesario que ingrese un codigo para realizar la busqueda');
            $this->redirect(array('controller'=>'almacens','action'=>'gestion_hwsw'));
        }
    }
    
    function buscar_des(){
        $this->set('title_for_layout','Gestion de Hardware y Software');
        if(!empty($this->data['Almacen']['des'])){
            $lista_res=$this->Almacen->find('all',array('conditions'=>array('Almacen.descripcion like'=>'%'.$this->data['Almacen']['des'].'%','Almacen.estado'=>0)));
            $this->set('lista_res',$lista_res);
        }else{
            $this->Session->setFlash('Es necesario que ingrese una descripcion para realizar la busqueda');
            $this->redirect(array('controller'=>'almacens','action'=>'gestion_hwsw'));
        }
    }
    
    function buscar_todos(){
        $this->set('title_for_layout','Gestion de Hardware y Software');
            $lista_res=$this->Almacen->find('all',array('conditions'=>array('Almacen.estado'=>0)));
            $this->set('lista_res',$lista_res);
    }
    
    function inhabilitar($almacen_id=null){
            $this->Almacen->id=$almacen_id;
            $this->Almacen->saveField('estado',1);
            
            $this->loadModel('Equipo');
            $existe_e=$this->Equipo->find('count',array('conditions'=>array('Equipo.almacen_id'=>$almacen_id)));
            if($existe_e!=0){
                $id_com=$this->Equipo->field('Equipo.id',array('Equipo.almacen_id'=>$almacen_id));
                $this->Equipo->id=$id_com;
                $this->Equipo->saveField('estado',1);
            }else{
                $this->loadModel('Componente');
                $existe_c=$this->Componente->find('count',array('conditions'=>array('Componente.almacen_id'=>$almacen_id)));
                if($existe_c!=0){
                    $id_com=$this->Componente->field('Componente.id',array('Componente.almacen_id'=>$almacen_id));
                    $this->Componente->id=$id_com;
                    $this->Componente->saveField('estado',1);
                }    
            }
            $this->Session->setFlash('El componente ha sido deshabilitado');
            $this->redirect(array('controller'=>'almacens','action'=>'gestion_hwsw'));
    
    }
    
    function habilitar(){
        $this->set('title_for_layout','Gestion de Hardware y Software');
        $lista_res=$this->Almacen->find('all',array('conditions'=>array('Almacen.estado'=>1)));
        $this->set('lista_res',$lista_res);
    }
    
    function habilitacion($almacen_id=null){
            $this->Almacen->id=$almacen_id;
            $this->Almacen->saveField('estado',0);
            
            $this->loadModel('Equipo');
            $existe_e=$this->Equipo->find('count',array('conditions'=>array('Equipo.almacen_id'=>$almacen_id)));
            if($existe_e!=0){
                $id_com=$this->Equipo->field('Equipo.id',array('Equipo.almacen_id'=>$almacen_id));
                $this->Equipo->id=$id_com;
                $this->Equipo->saveField('estado',0);
            }else{
                $this->loadModel('Componente');
                $existe_c=$this->Componente->find('count',array('conditions'=>array('Componente.almacen_id'=>$almacen_id)));
                if($existe_c!=0){
                    $id_com=$this->Componente->field('Componente.id',array('Componente.almacen_id'=>$almacen_id));
                    $this->Componente->id=$id_com;
                    $this->Componente->saveField('estado',0);
                }    
            }
            $this->Session->setFlash('El componente ha sido deshabilitado');
            $this->redirect(array('controller'=>'almacens','action'=>'gestion_hwsw'));
    }
    
    function editar($almacen_id=null){
            $this->loadModel('Equipo');
            $existe_e=$this->Equipo->find('count',array('conditions'=>array('Equipo.almacen_id'=>$almacen_id)));
            if($existe_e!=0){
                $id_com=$this->Equipo->field('Equipo.id',array('Equipo.almacen_id'=>$almacen_id));
                $this->redirect(array('controller'=>'equipos','action'=>'editar','id_equipo'=>$id_com));
            }else{
                $this->loadModel('Componente');
                $existe_c=$this->Componente->find('count',array('conditions'=>array('Componente.almacen_id'=>$almacen_id)));
                if($existe_c!=0){
                    $id_com=$this->Componente->field('Componente.id',array('Componente.almacen_id'=>$almacen_id));
                    $this->redirect(array('controller'=>'componentes','action'=>'editar','id_componente'=>$id_com));
                }else{
                    if(($existe_e==0)&&($existe_c==0)){
                        $this->redirect(array('controller'=>'almacens','action'=>'editar_a','id_almacen'=>$almacen_id));
                    }
                }    
            }
    }
    
    function editar_a(){
        $this->set('title_for_layout','Gestion de Hardware y Software');
        $id_almacen=$this->params['named']['id_almacen'];
        $this->set('id_almacen',$id_almacen);
        $this->Almacen->id=$id_almacen;
        $this->data=$this->Almacen->read();
    }
    
    function editar_save(){
        if(!empty($this->data)){
            $id_almacen=$this->data['Almacen']['alma_id'];
            $this->Almacen->id=$id_almacen;
            if($this->Almacen->save($this->data)){
                $this->Session->setFlash('Datos editados con exito');
                $this->redirect(array('controller'=>'almacens','action'=>'gestion_hwsw'));
            }else{
                $this->Session->setFlash('Error al completar la edicion');
                $this->redirect(array('controller'=>'almacens','action'=>'gestion_hwsw'));
            }
        }
    }
    
    
    
}
?>
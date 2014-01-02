<?php
Class DatosPersonalesController extends AppController{
    var $name='DatosPersonales';
    var $components=array('Auth');
    var $helpers=array('Form','Html','Session');
    
    function gestion_usuarios(){
        $this->set('title_for_layout','Gestion de Usuarios');
    }
    
    function buscar_ident(){
        $this->set('title_for_layout','Gestion de Usuarios');
        if(!empty($this->data['DatosPersonale']['identi'])){
            $lista_res=$this->DatosPersonale->find('all',array('conditions'=>array('DatosPersonale.identificacion'=>$this->data['DatosPersonale']['identi'],'DatosPersonale.estado'=>0)));
            $this->set('lista_res',$lista_res);
        }else{
            $this->Session->setFlash('Es necesario que ingrese el numero de identificacion para realizar la busqueda.');
            $this->redirect(array('controller'=>'datos_personales','action'=>'gestion_usuarios'));
        }
    }
    
    function buscar_nom(){
        $this->set('title_for_layout','Gestion de Usuarios');
        if(!empty($this->data['DatosPersonale']['nom'])){
            $lista_res=$this->DatosPersonale->find('all',array('conditions'=>array('DatosPersonale.nombres like'=>'%'.$this->data['DatosPersonale']['nom'].'%','DatosPersonale.estado'=>0)));
            $this->set('lista_res',$lista_res);
        }else{
            $this->Session->setFlash('Es necesario que ingrese el nombre para poder realizar la busqueda.');
            $this->redirect(array('controller'=>'datos_personales','action'=>'gestion_usuarios'));
        }
        
    }
    
    function buscar_ape(){
        $this->set('title_for_layout','Gestion de Usuarios');
        if(!empty($this->data['DatosPersonale']['ape'])){
            $lista_res=$this->DatosPersonale->find('all',array('conditions'=>array('DatosPersonale.apellidos like'=>'%'.$this->data['DatosPersonale']['ape'].'%','DatosPersonale.estado'=>0)));
            $this->set('lista_res',$lista_res);
        }else{
            $this->Session->setFlash('Es necesario que ingrese el apellido para poder realizar la busqueda.');
            $this->redirect(array('controller'=>'datos_personales','action'=>'gestion_usuarios'));
        }
        
    }
    
    function buscar_tipo(){
        $this->set('title_for_layout','Gestion de Usuarios');
        if(!empty($this->data['DatosPersonale']['tip'])){
            $lista_res=$this->DatosPersonale->find('all',array('conditions'=>array('DatosPersonale.tipo like'=>$this->data['DatosPersonale']['tip'],'DatosPersonale.estado'=>0)));
            $this->set('lista_res',$lista_res);
        }else{
            $this->Session->setFlash('Es necesario que escoja un tipo de usuario para realizar la busqueda');
            $this->redirect(array('controller'=>'datos_personales','action'=>'gestion_usuarios'));
        }
        
    }
    
    function buscar_todos(){
        $this->set('title_for_layout','Gestion de Usuarios');
        $lista_res=$this->DatosPersonale->query("SELECT * FROM datos_personales WHERE estado=0 GROUP BY tipo");
        $this->set('lista_res',$lista_res);
    }
    
    function registro(){
        $this->set('title_for_layout','Registro de Usuarios');
        if(!empty($this->data)){
            if(!empty($this->data['DatosPersonale']['tipo'])){
                $this->DatosPersonale->create();
                if($this->DatosPersonale->save($this->data)){
                    $id_persona=mysql_insert_id();
                    $this->redirect(array('controller'=>'users','action'=>'register','id_persona'=>$id_persona));
                }    
            }else{
                $this->Session->setFlash('Es necesario que escoja el tipo de usuario que se registrara');
            }
        }
        
    }
    
    function datos_p(){//editar datos personales del usuario
    $this->set('title_for_layout','Datos Personales');
        $user_id=$this->Session->read('Auth.User.id');//id de la cuenta
        $persona_id=$this->DatosPersonale->field('DatosPersonale.id',array('DatosPersonale.user_id'=>$user_id));// id de los datos personales del usuario
        $nombres=$this->DatosPersonale->field('DatosPersonale.nombres',array('DatosPersonale.user_id'=>$user_id));
        $this->set('nombres',$nombres);
        $apellidos=$this->DatosPersonale->field('DatosPersonale.apellidos',array('DatosPersonale.user_id'=>$user_id));
        $this->set('apellidos',$apellidos);
        $identificacion=$this->DatosPersonale->field('DatosPersonale.identificacion',array('DatosPersonale.user_id'=>$user_id));
        $this->set('identificacion',$identificacion);
        $telefono=$this->DatosPersonale->field('DatosPersonale.telefono',array('DatosPersonale.user_id'=>$user_id));
        $this->set('telefono',$telefono);
        $direccion=$this->DatosPersonale->field('DatosPersonale.direccion',array('DatosPersonale.user_id'=>$user_id));
        $this->set('direccion',$direccion);  
        if(!empty($this->data)){
            $this->DatosPersonale->id=$persona_id;
            if($this->DatosPersonale->save($this->data)){
                $this->Session->setFlash('Los datos se guardaron exitosamente');
                $this->redirect(array('controller'=>'users','action'=>'inicio'));
            }else{
                $this->Session->setFlash('Los datos no se guardaron correctamente. Vuelva a intentarlo en un momento.');
            }
        }
    }
    
    function editar_p($id_persona=null){//Editar datos de usuarios desde el admin
    $this->set('title_for_layout','Editar Datos Personales de Usuario');
           $this->DatosPersonale->id=$id_persona;    
            if(empty($this->data)) {
                $this->data=$this->DatosPersonale->read();    
                } else {        
                if ($this->DatosPersonale->save($this->data)) {           
                    $this->Session->setFlash('Datos editados correctamente.');           
                    $this->redirect(array('controller'=>'datos_personales','action'=>'gestion_usuarios'));        
                    }   
                }
            
    }
    
    function editar_c($id_persona=null){//editar datos de cuenta de usuario desde admin
        $this->set('title_for_layout','Editar Datos de Cuenta de Usuario');
        $this->loadModel('User');
        $user_id=$this->DatosPersonale->field('user_id',array('DatosPersonale.id'=>$id_persona));
        $this->set('user_id',$user_id);
        $username=$this->User->field('username',array('User.id'=>$user_id));
        $this->set('username',$username);
        
    }
    
    function inhabilitar($id_persona=null){
        $this->DatosPersonale->id=$id_persona;
        $this->DatosPersonale->saveField('estado',1);
        $this->Session->setFlash('El usuario ha sido deshabilitado');
        $this->redirect(array('controller'=>'datos_personales','action'=>'gestion_usuarios'));
    }
    
    function habilitar(){
        $this->set('title_for_layout','Gestion de Usuarios');
        $lista_res=$this->DatosPersonale->query("SELECT * FROM datos_personales WHERE estado=1 GROUP BY tipo");
        $this->set('lista_res',$lista_res);
    }
    
    function habilitacion($id_persona=null){
        $this->DatosPersonale->id=$id_persona;
        $this->DatosPersonale->saveField('estado',0);
        $this->Session->setFlash('El usuario ha sido habilitado');
        $this->redirect(array('controller'=>'datos_personales','action'=>'gestion_usuarios'));
    }
    
    
}
?>
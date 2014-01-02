<?php
Class UsersController extends AppController{
    var $name='Users';
    var $components=array('Auth');
    var $helpers=array('Form','Html','Session'); 
    
    function login(){
        if($this->Auth->login()){
            $this->loginRedirect();
        }
        else{
            $this->Session->setFlash('Error! Datos incorrectos.');
            $this->redirect(array('controller'=>'pages','action'=>'home'));
        }
    }

    function logout(){ 
       $this->redirect($this->Auth->logout());
    }
    
    function register(){
        $this->set('title_for_layout','Registro de Usuarios');
        if(!empty($this->data)){
            if(!empty($this->data['User']['password_confirm'])){
                if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['password_confirm'])) {
                    $this->User->create();
                    if($this->User->save($this->data)){
                        $id_cuenta=mysql_insert_id();
                        $id_persona=$this->data['User']['id_persona'];
                        $this->loadModel('DatosPersonale');
                        $this->DatosPersonale->id=$id_persona;
                        $this->DatosPersonale->saveField('user_id',$id_cuenta);
                        $this->Session->setFlash('Registro exitoso');
                        $this->redirect(array('controller'=>'datos_personales','action'=>'gestion_usuarios'));
                    }else{
                        $this->Session->setFlash('Error al completar el registro. Vuelva a intentarlo en un momento');
                        $this->redirect(array('controller'=>'datos_personales','action'=>'registro'));
                    }
                }else{
                    $this->Session->setFlash('Error!!! Las passwords no coinciden');
                }
            }else{
                $this->Session->setFlash('Error! Es necesario completar todos los campos');
            }   
        }    
    }
    
    function inicio(){
        $this->layout='inicio';
        $user_id=$this->Session->read('Auth.User.id');
        $this->loadModel('DatosPersonale');
        $estado=$this->DatosPersonale->field('DatosPersonale.estado',array('DatosPersonale.user_id'=>$user_id));
        if($estado==1){
            $this->Session->setFlash('Su cuenta de usuario se encuentra inactiva. Por favor pongase en contacto con el Administrador.');
            $this->redirect(array('controller'=>'users','action'=>'logout'));
        }
        $this->loadModel('DatosPersonale');
        $nombre=$this->DatosPersonale->field('DatosPersonale.nombres',array('DatosPersonale.user_id'=>$this->Session->read('Auth.User.id')));
        $this->set('nombre',$nombre);
        $tipo=$this->DatosPersonale->field('DatosPersonale.tipo',array('DatosPersonale.user_id'=>$user_id));
        $this->set('tipo',$tipo);
        
    }
    
    function datos_c(){//editar datos de la cuenta de usuario
        $this->set('title_for_layout','Datos de Cuenta de Usuario');
        $user_id=$this->Session->read('Auth.User.id'); 
        $username=$this->User->field('User.username',array('User.id'=>$user_id));
        $this->set('username',$username);
        
        if(!empty($this->data)){
            if(!empty($this->data['User']['password_confirm'])){
                if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['password_confirm'])) {
                    $this->User->id=$user_id;
                    if($this->User->save($this->data)){
                        $this->Session->setFlash('Datos guardados con exito');
                        $this->redirect(array('controller'=>'users','action'=>'inicio'));
                    }else{
                        $this->Session->setFlash('Error al guardar datos. Vuelva a intentarlo en un momento');
                    }
                }else{
                    $this->Session->setFlash('Error!!! Las passwords no coinciden');
                }
            }else{
                $this->Session->setFlash('Error! Es necesario completar todos los campos');
            }   
        }
    }
    
    function editar_c(){//editar datos de cuenta de usuario desde admin
        
        if(!empty($this->data)){
            if((!empty($this->data['User']['username']))&&(!empty($this->data['User']['password']))&&(!empty($this->data['User']['password_confirm']))){
                if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['password_confirm'])) {
                    $this->User->id=$this->data['User']['id_user'];
                    if($this->User->save($this->data)){
                        $this->Session->setFlash('Datos guardados con exito');
                        $this->redirect(array('controller'=>'datos_personales','action'=>'gestion_usuarios'));
                    }else{
                        $this->Session->setFlash('Error al guardar datos. Vuelva a intentarlo en un momento');
                    }
                }else{
                    $this->Session->setFlash('Error!!! Las passwords no coinciden');
                    
                }
            }else{
                $this->Session->setFlash('Error! Es necesario completar todos los campos');
                $this->redirect(array('controller'=>'datos_personales','action'=>'gestion_usuarios'));
            }   
        }
    }
    

}
?>
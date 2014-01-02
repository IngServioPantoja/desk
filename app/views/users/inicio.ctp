<br />
<b>Bienvenido <?php echo $nombre;?></b><br /><br />

<?php echo $html->link('Datos Personales', array('controller'=>'datos_personales','action'=>'datos_p'));?><br /><br />
<?php echo $html->link('Datos Cuenta de Usuario',array('controller'=>'users','action'=>'datos_c'));?><br /><br />
<?php 
if(strcmp($tipo,'Administrador')==0){
    echo $html->link('Gestion de Usuarios',array('controller'=>'datos_personales','action'=>'gestion_usuarios')); ?><br /><br />
    <?php echo $html->link('Gestion de incidencias',array('controller'=>'incidencias','action'=>'gestion_incidencias'));?><br /><br />
    <?php echo $html->link('Gestion de hardware y software',array('controller'=>'almacens','action'=>'gestion_hwsw'));?><br /><br />
    <?php echo $html->link('Gestion de horarios de Tecnicos',array('controller'=>'horarios','action'=>'gestion_horarios'));?><br /><br />
    <?php
}else{
    if(strcmp($tipo,'Tecnico')==0){
        echo $html->link('Incidencias asignadas',array('controller'=>'asignaciones','action'=>'asignadas'));?><br /><br />
        <?php echo $html->link('Ver horario',array('controller'=>'horarios','action'=>'ver_tec'));?><br /><br />
        <?php
    }else{
        if(strcmp($tipo,'Almacen')==0){
            ?>
            <?php echo $html->link('Gestion de hardware y software',array('controller'=>'almacens','action'=>'gestion_hwsw'));?><br /><br />
            <?php
        }else{
            if(strcmp($tipo,'Usuario General')==0){
                echo $html->link('Reportar incidencia',array('controller'=>'incidencias','action'=>'registrar'));?><br /><br />
                <?php echo $html->link('Seguimiento de incidencias',array('controller'=>'incidencias','action'=>'seguimiento'));?><br /><br />
                <?php
            }
        }
    }
    
}
echo $html->link('Cerrar Sesion',array('controller'=>'users','action'=>'logout'));
?>




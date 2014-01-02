<table width="80%">
<tr><th colspan="7"><center>Horario</center></th></tr>
<tr><th>Hora</th><th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th><th>Sabado</th></tr>
<tr>
<th width="150">7:00 - 8:00 am</th>
<td><center>
<?php 
$l7=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='07:00:00')){$l7++;}
endforeach;
if($l7==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='07:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m7=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='07:00:00')){$m7++;}
endforeach;
if($m7==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='07:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi7=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='07:00:00')){$mi7++;}
endforeach;
if($mi7==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='07:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j7=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='07:00:00')){$j7++;}
endforeach;
if($j7==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='07:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v7=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='07:00:00')){$v7++;}
endforeach;
if($v7==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='07:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$s7=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='07:00:00')){$s7++;}
endforeach;
if($s7==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='07:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}

?>
</center></td>
</tr>
<tr>
<th width="150">8:00 - 9:00 am</th>
<td><center>
<?php 
$l8=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='08:00:00')){$l8++;}
endforeach;
if($l8==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='08:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m8=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='08:00:00')){$m8++;}
endforeach;
if($m8==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='08:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi8=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='08:00:00')){$mi8++;}
endforeach;
if($mi8==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='08:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j8=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='08:00:00')){$j8++;}
endforeach;
if($j8==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='08:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v8=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='08:00:00')){$v8++;}
endforeach;
if($v8==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='08:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$s8=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='08:00:00')){$s8++;}
endforeach;
if($s8==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='08:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
</tr>
<tr>
<th width="150">9:00 - 10:00 am</th>
<td><center>
<?php 
$l9=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='09:00:00')){$l9++;}
endforeach;
if($l9==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='09:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m9=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='09:00:00')){$m9++;}
endforeach;
if($m9==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='09:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi9=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='09:00:00')){$mi9++;}
endforeach;
if($mi9==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='09:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j9=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='09:00:00')){$j9++;}
endforeach;
if($j9==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='09:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v9=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='09:00:00')){$v9++;}
endforeach;
if($v9==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='09:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$s9=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='09:00:00')){$s9++;}
endforeach;
if($s9==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='09:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
       }
endforeach;
}
?>
</center></td>
</tr>
<tr>
<th width="150">10:00 - 11:00 am</th>
<td><center>
<?php 
$l10=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='10:00:00')){$l10++;}
endforeach;
if($l10==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='10:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m10=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='10:00:00')){$m10++;}
endforeach;
if($m10==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='10:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi10=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='10:00:00')){$mi10++;}
endforeach;
if($mi10==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='10:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j10=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='10:00:00')){$j10++;}
endforeach;
if($j10==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='10:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v10=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='10:00:00')){$v10++;}
endforeach;
if($v10==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='10:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$s10=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='10:00:00')){$s10++;}
endforeach;
if($s10==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='10:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
</tr>
<tr>
<th width="150">11:00 - 12:00 m</th>
<td><center>
<?php 
$l11=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='11:00:00')){$l11++;}
endforeach;
if($l11==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='11:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m11=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='11:00:00')){$m11++;}
endforeach;
if($m11==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='11:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi11=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='11:00:00')){$mi11++;}
endforeach;
if($mi11==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='11:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j11=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='11:00:00')){$j11++;}
endforeach;
if($j11==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='11:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v11=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='11:00:00')){$v11++;}
endforeach;
if($v11==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='11:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$s11=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='11:00:00')){$s11++;}
endforeach;
if($s11==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='11:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
</tr>
<tr>
<th width="150">12:00 - 1:00 pm</th>
<td><center>
<?php 
$l12=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='12:00:00')){$l12++;}
endforeach;
if($l12==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='12:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m12=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='12:00:00')){$m12++;}
endforeach;
if($m12==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='12:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi12=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='12:00:00')){$mi12++;}
endforeach;
if($mi12==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='12:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j12=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='12:00:00')){$j12++;}
endforeach;
if($j12==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='12:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v12=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='12:00:00')){$v12++;}
endforeach;
if($v12==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='12:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$s12=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='12:00:00')){$s12++;}
endforeach;
if($s12==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='12:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
</tr>
<tr>
<th width="150">1:00 - 2:00 pm</th>
<td><center>
<?php 
$l13=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='13:00:00')){$l13++;}
endforeach;
if($l13==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='13:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m13=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='13:00:00')){$m13++;}
endforeach;
if($m13==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='13:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi13=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='13:00:00')){$mi13++;}
endforeach;
if($mi13==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='13:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j13=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='13:00:00')){$j13++;}
endforeach;
if($j13==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='13:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v13=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='13:00:00')){$v13++;}
endforeach;
if($v13==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='13:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$s13=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='13:00:00')){$s13++;}
endforeach;
if($s13==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='13:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
</tr>
<tr>
<th width="150">2:00 - 3:00 pm</th>
<td><center>
<?php 
$l14=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='14:00:00')){$l14++;}
endforeach;
if($l14==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='14:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m14=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='14:00:00')){$m14++;}
endforeach;
if($m14==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='14:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi14=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='14:00:00')){$mi14++;}
endforeach;
if($mi14==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='14:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j14=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='14:00:00')){$j14++;}
endforeach;
if($j14==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='14:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v14=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='14:00:00')){$v14++;}
endforeach;
if($v14==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='14:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$s14=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='14:00:00')){$s14++;}
endforeach;
if($s14==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='14:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
         }
endforeach;
}
?>
</center></td>
</tr>
<tr>
<th width="150">3:00 - 4:00 pm</th>
<td><center>
<?php 
$l15=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='15:00:00')){$l15++;}
endforeach;
if($l15==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='15:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m15=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='15:00:00')){$m15++;}
endforeach;
if($m15==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='15:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi15=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='15:00:00')){$mi15++;}
endforeach;
if($mi15==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='15:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j15=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='15:00:00')){$j15++;}
endforeach;
if($j15==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='15:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v15=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='15:00:00')){$v15++;}
endforeach;
if($v15==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='15:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$s15=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='15:00:00')){$s15++;}
endforeach;
if($s15==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='15:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
</tr>
<tr>
<th width="150">4:00 - 5:00 pm</th>
<td><center>
<?php 
$l16=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='16:00:00')){$l16++;}
endforeach;
if($l16==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='16:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
       }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m16=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='16:00:00')){$m16++;}
endforeach;
if($m16==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='16:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi16=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='16:00:00')){$mi16++;}
endforeach;
if($mi16==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='16:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j16=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='16:00:00')){$j16++;}
endforeach;
if($j16==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='16:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v16=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='16:00:00')){$v16++;}
endforeach;
if($v16==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='16:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
       }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$s16=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='16:00:00')){$s16++;}
endforeach;
if($s16==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='16:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
</tr>
<tr>
<th width="150">5:00 - 6:00 pm</th>
<td><center>
<?php 
$l17=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='17:00:00')){$l17++;}
endforeach;
if($l17==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='17:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m17=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='17:00:00')){$m17++;}
endforeach;
if($m17==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='17:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi17=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='17:00:00')){$mi17++;}
endforeach;
if($mi17==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='17:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j17=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='17:00:00')){$j17++;}
endforeach;
if($j17==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='17:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
         }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v17=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='17:00:00')){$v17++;}
endforeach;
if($v17==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='17:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$s17=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='17:00:00')){$s17++;}
endforeach;
if($s17==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Sabado')&&($h['Horario']['hora']=='17:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
</tr>
<tr>
<th width="150">6:00 - 7:00 pm</th>
<td><center>
<?php 
$l18=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='18:00:00')){$l18++;}
endforeach;
if($l18==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='18:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m18=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='18:00:00')){$m18++;}
endforeach;
if($m18==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='18:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi18=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='18:00:00')){$mi18++;}
endforeach;
if($mi18==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='18:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j18=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='18:00:00')){$j18++;}
endforeach;
if($j18==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='18:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v18=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='18:00:00')){$v18++;}
endforeach;
if($v18==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='18:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>-
</center></td>
</tr>
<tr>
<th width="150">7:00 - 8:00 pm</th>
<td><center>
<?php 
$l19=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='19:00:00')){$l19++;}
endforeach;
if($l19==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='19:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m19=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='19:00:00')){$m7++;}
endforeach;
if($m19==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='19:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi19=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='19:00:00')){$mi19++;}
endforeach;
if($mi19==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='19:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j19=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='19:00:00')){$j19++;}
endforeach;
if($j19==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='19:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v19=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='19:00:00')){$v19++;}
endforeach;
if($v19==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='19:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
       }
endforeach;
}
?>
</center></td>
<td><center>-
</center></td>
</tr>
<tr>
<th width="150">8:00 - 9:00 pm</th>
<td><center>
<?php 
$l20=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='20:00:00')){$l20++;}
endforeach;
if($l20==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='20:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m20=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='20:00:00')){$m20++;}
endforeach;
if($m20==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='20:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
       }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi20=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='20:00:00')){$mi7++;}
endforeach;
if($mi20==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='20:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j20=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='20:00:00')){$j20++;}
endforeach;
if($j20==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='20:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v20=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='20:00:00')){$v20++;}
endforeach;
if($v20==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='20:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>-
</center></td>
</tr>
<tr>
<th width="150">9:00 - 10:00 pm</th>
<td><center>
<?php 
$l21=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='21:00:00')){$l7++;}
endforeach;
if($l21==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='21:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m21=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='21:00:00')){$m21++;}
endforeach;
if($m21==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='21:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi21=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='21:00:00')){$mi21++;}
endforeach;
if($mi21==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='21:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j21=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='21:00:00')){$j21++;}
endforeach;
if($j21==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='21:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v21=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='21:00:00')){$v21++;}
endforeach;
if($v21==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='21:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>-
</center></td>
</tr>
<tr>
<th width="150">10:00 - 11:00 pm</th>
<td><center>
<?php 
$l22=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='22:00:00')){$l22++;}
endforeach;
if($l22==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Lunes')&&($h['Horario']['hora']=='22:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$m22=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='22:00:00')){$m22++;}
endforeach;
if($m22==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Martes')&&($h['Horario']['hora']=='22:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$mi22=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='22:00:00')){$mi22++;}
endforeach;
if($mi22==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Miercoles')&&($h['Horario']['hora']=='22:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$j22=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='22:00:00')){$j22++;}
endforeach;
if($j22==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Jueves')&&($h['Horario']['hora']=='22:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>
<?php 
$v22=0;
foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='22:00:00')){$v22++;}
endforeach;
if($v22==1){
    foreach($horario as $h):
    if(($h['Horario']['dia']=='Viernes')&&($h['Horario']['hora']=='22:00:00')){
        echo $html->image('visto.jpg',array('alt'=>'Ocupado'));
        }
endforeach;
}
?>
</center></td>
<td><center>-
</center></td>
</tr>
</table>
</center>
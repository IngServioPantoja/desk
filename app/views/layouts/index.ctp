<html>
<head>
<div id="banner"> 
</table>
</div>
<?php echo $this->Html->css('estilo');?>
</head>
<body><center>   
<div id="login">
         <?php  
         
         if ($session->check('Message.flash')) {
           echo $session->flash();
            }
         echo $content_for_layout ?> 
         
</div></center>
<div id="foot"><br /><br />
<center>Mario Fernando Arturo - Jesus Javier Madro&ntilde;ero<br />IUCESMAG 2013</center>
</body>
</div>
</html>
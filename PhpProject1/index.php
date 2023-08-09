<?php

include './FormPersonal.php';

 $nombres = 'Juan';
 $apellidos = 'Ico Casas';
 $fecha_nacimiento = '10-06-2003';
 $documento = '102031';
 $tipo_documento = 'cc';
 $telefono = '30042321';
 $direccion = 'Calla 2 #10-21';
 $ciudad = 'Bogota';
 $email = 'juan@gmail.com';


$userBasics =  new FormPersonal($nombres,$apellidos,$fecha_nacimiento,$documento,$tipo_documento,$telefono,$direccion,$ciudad,$email); 

echo $userBasics->getDataUser();
echo $userBasics->getFullUser();








<?php

define('SERVIDOR','localhost');
define('USUARIO','');
define('SENHA','');
define('BANCO','');

$con = new mysqli(SERVIDOR,USUARIO,SENHA,BANCO);
if(mysqli_connect_errno()){
    printf("falha na conexão: %s\n", mysqli_connect_error());
    exit;
    
}
ini_set('default_charset','UTF-8');
$con->set_charset("utf8");
?>

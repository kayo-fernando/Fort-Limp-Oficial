<?php
 $dbhost = 'localhost';
 $dbusername = 'root';
 $dbpassword = '';
 $dbname = 'bd_fortlimp';

 /*$con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

 if(!$con){
    die("connection failed: ".mysqli_connect_error());
 }
echo "connected sucessfully";
mysqli_close($con);*/
$conexao = new mysqli( $dbhost, $dbusername, $dbpassword, $dbname);

/*if($conexao->connect_errno){
   echo "Erro";
}
else{
   echo "Conexão efetuada com sucesso";
}*/
?>

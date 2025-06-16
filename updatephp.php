<?php
include 'conexao.php';

$id=$_POST['Id_user']; 
$nome=$_POST['nome'];    
$email=$_POST['email'];            
$senha=$_POST['senha'];
$filme=$_POST['filme'];  

$horario=$_POST['horario']; 
$cadeira=$_POST['cadeira'];    
$sessao=$_POST['sessao'];            
$idioma=$_POST['idioma'];
$dataCadas=$_POST['data'];  
$preco=$_POST['preco']; 



$sql = "UPDATE cinemax SET Nome = '$nome', senha = '$senha', email='$email', filme='$filme',
 horario='$horario', cadeira='$cadeira', tipo_de_sessao='$sessao', idioma='$idioma', preco='$preco' ,dataCad='$dataCadas'  WHERE cinemax.Id_user = $id";
    

if (mysqli_query($conn, $sql)) {
  echo "Dados cadastrados com Sucesso<br>";
  //header("Location:noticiapesquisa.php");
   
           
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
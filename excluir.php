<?php
include 'conexao.php';

$id=$_POST['Id_user'];    

$sql = "DELETE FROM cinemax WHERE cinemax.Id_user = $id";
 

if (mysqli_query($conn, $sql)) {
  echo "Dados excluido com Sucesso<br>";
              
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>


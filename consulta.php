
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

<style>

   #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100;
  }

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:rgb(103, 104, 101);
  color: white;
}

  </style>
</head>

  <body>
  <object width="100%" height="55px" data="menu.html"></object>

    
  <h1 align="center">Consulta do banco de dados</h1>
  
    <table id="customers">
      <tr>
        <th width="3%" >ID</th>
        <th width="10%">Nome</th> 
        <th width="8%">Email</th> 
        <th width="5%">Senha</th> 

        <th width="8%" >Filme</th>
        <th width="5%">Horario</th> 
        <th width="3%">Cadeira</th> 
        <th width="3%">Tipo de sessao</th>
        
        <th width="6%">Preço</th>
        <th width="5%">Idioma</th> 
        <th width="10%">Data de cadastro</th> 
        
 
  <?php
      include ('conexao.php');
      $sql ="SELECT * FROM cinemax" ;
      //$sql.= " where titulo like '%".$_POST['noticiapesquisa']."%' ";
           
      $resultado  = $conn->query("$sql");
      while($resultset = $resultado->fetch_array())
          {
    ?>
        <tr>        
        <td> <?php  echo $resultset['Id_user'];?>  </td>
        <td> <?php  echo $resultset['Nome'];?>  </td>
        <td> <?php  echo $resultset['email'];?>  </td>
        <td> <?php  echo $resultset['senha'];?> </td> 
        <td> <?php  echo $resultset['filme'];?> </td> 
        <td> <?php  echo $resultset['horario'];?> </td> 
        <td> <?php  echo $resultset['cadeira'];?> </td> 
        <td> <?php  echo $resultset['tipo_de_sessao'];?> </td> 
        <td> <?php  echo $resultset['preco'];?> </td> 
        <td> <?php  echo $resultset['idioma'];?> </td> 
        <td> <?php  echo $resultset['dataCad'];?> </td> 
      </tr>

      <?php 
         } 
         
         ?>    
    </table>    
    
  </body>
</html>
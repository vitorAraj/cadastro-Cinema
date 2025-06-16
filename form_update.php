<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário contacto site EPV</title>
    </head>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

  body .class {
            font-family: 'Roboto', sans-serif;
            background-color: #f0efef;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 15px 0;
        }

        .container {
            width: 250px;
            max-width: 600px;
            margin: 8px auto;
            background: rgba(255, 255, 255, 0.459);
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 1);
            border-radius: 10px;
        }

        .form {
            display: flex;
            flex-direction: column;
        }

        .form label {
            font-weight: bold;
            margin: 10px 0 5px;
            text-align: left;
        }

        .form input, select {
            padding: 10px;
            font-size: 16px;
            margin: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .button {
            background-color: #cc5500;
            color: white;
            border: none;
            width: 90%;
            padding: 12px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }

        .button:hover {
            background-color: #a34502;
        }

</style>



<body>

<?php
include 'conexao.php';

$id=$_POST['id']; 
//echo "$id"   ;

$sql ="SELECT * FROM cinemax where Id_user='$id'" ;
//$sql.= " where titulo like '%".$_POST['noticiapesquisa']."%' ";
     
$resultado  = $conn->query("$sql");
while($resultset = $resultado->fetch_array())
    {

    $id=$resultset['Id_user'];
    $nome=$resultset['Nome'];
    $email=$resultset['email'];
    $senha=$resultset['senha'];
    $filme=$resultset['filme'];
    $preco=$resultset['preco'];
    $horario=$resultset['horario'];
    $cadeira=$resultset['cadeira'];
    $sessao=$resultset['tipo_de_sessao'];
    $idioma=$resultset['idioma'];
    $dataCadas=$resultset['dataCad'];


    }
       
?>

 
  <form class="form" action="updatephp.php" method="post">

    <div style="text-align: center;" class="class" >
        <h1>Alterar Dados</h1>
      </div>
      <br>
      <div class="container">

      <label for="id">ID: <?php echo $id ?> </label><br>
      <input type="hidden"  name="Id_user" value="<?php echo $id ?>">
      <br>
        <label for="nome">Nome</label><br>
        <input type="text" id="fname" name="nome" value="<?php echo $nome ?>"><br>
    
        <label for="email">Email</label><br>
        <input type="text" id="nameinst" name="email" value="<?php echo $email ?>"> <br> 
    
        <label for="senha">Senha</label><br> 
        <input type="text" id="nameturma" name="senha" value="<?php echo $senha ?>"> <br>  
        
        <label for="filme">Filme</label><br> 
        <input type="text" id="nameturma" name="filme" value="<?php echo $filme ?>"> <br>  
        
        <label for="horario">Horario</label><br> 
        <input type="time" id="nameturma" name="horario" value="<?php echo $horario ?>"> <br>  
        
        <label for="tipoDeSessao">Tipo de sessão</label><br> 
        <input type="text" id="nameturma" name="sessao" value="<?php echo $sessao ?>"> <br>  

        <label for="idioma">Idioma</label><br> 
        <input type="text" id="nameturma" name="idioma" value="<?php echo $idioma ?>"> <br>  

        <label for="dataDecadastro">Data de cadastro</label><br> 
        <input type="text" id="nameturma" name="data" value="<?php echo $dataCadas ?>"> <br>  

        <label for="preco">Preço</label><br> 
        <input type="text" id="nameturma" name="preco" value="<?php echo $preco ?>"> <br>  

        <label for="lname">Cadeira</label><br> 
        <input type="text" id="nameturma" name="cadeira" value="<?php echo $cadeira ?>"> <br>  

        <input class="button" type="submit" value="Enviar">
        
      </div> 
   
  </form>


  
</div>

</body>
</html>



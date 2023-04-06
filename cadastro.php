<?php
include("connection.php");
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = "INSERT INTO cadastro(nome,email,senha) VALUES ('$nome', '$email', '$senha')"; 

mysqli_query($conexao, $sql)
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Cadastro</title>
</head>
<body>
    <div class="container" >
    <div class="content">           
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="POST" action="cadastro.php"> 
          <h1>Cadastro de Usuário</h1> 
          <p> 
            <label for="">Nome</label>
            <input type="text" name="nome"/>
          </p>
          <p> 
            <label for="">Email</label>
            <input type="email" name="email"/> 
          </p>
          <p> 
            <label for="">Senha</label>
            <input type="password" name="senha"/>
          </p>
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
        </form>
      </div>
</body>
</html>
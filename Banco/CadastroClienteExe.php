<?php
include('includes/conexao.php');
        $nomec = $_POST['nomec'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $ativo = $_POST['ativo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cliente</title>
    <link rel="stylesheet" href="cadastrocidade.css">
</head>
<body>
  <div class="container">
    <?php
        include('includes/conexao.php');
        $nomec = $_POST['nomec'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $ativo = $_POST['ativo'];
        echo "<h1>Dados do Cliente</h1>";
        echo "Nome do Cliente: $nomec<br>";
        echo "Senha: $senha<br>";
        echo "Email: $email<br>";
        echo "Ativo: $ativo<br>";
        
        $sql =  "INSERT INTO Cliente (nomec,senha, email,ativo)";
        $sql .= " VALUES ('".$nomec."','".$senha."','".$email."','".$ativo."')";
        echo "<p>" . $sql . "</p>";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados Cadastrados com sucesso</h2>";
        } else {
            echo "<h2>Erro ao cadastrar</h2>";
            echo "<p>" . mysqli_error($con) . "</p>";
        }
    ?>
    <button class="btn"><a href="./index.php">Voltar</a></button>
  </div>
</body>
</html>
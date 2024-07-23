<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nomec = $_POST['nomec'];
    $sql = "SELECT * FROM Cidade WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="listar.css">
</head>
<body>
    
    <h1>Alteração de Cliente</h1>
    <button class="btn"><a href="./index.php">Voltar</a></button>
    <?php
    echo "<p>Nome da cidade: $nome</p>";
    echo "<p>Estado: $estado</p>";
    $sql = "UPDATE Cidade SET 
    nome = '$nome',
    estado = '$estado'
    WHERE id = $id";

    echo $sql;
    $result = mysqli_query($con, $sql);
    if($result)
        echo " Dados atualizados";
    else
        echo " Erro ao atualizarar dados\n"
        .mysqli_error($con);
    
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cidade</title>
    <link rel="stylesheet" href="cadastrocidade.css">
</head>
<body>
    <div class="container">
        <fieldset>
            <legend>Cadastro do Cliente</legend>
            <form action="CadastroClienteExe.php" method="post">
                <div class="form-group">
                    <label for="nomec">Nome do Cliente</label>
                    <input type="text" name="nomec" id="nomec" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <div class="radio-group">
                        <input type="radio" id="ativo" name="ativo" value="1">
                        <label for="sim">Ativo</label>
                </div>
                <div class="radio-group">
                    <input type="radio" id="ativo" name="ativo" value="0">
                    <label for="sim">Inativo</label>
            </div>
                <div class="form-group">
                    <button type="submit" class="btn">Cadastrar</button>
                </div>
            </form>
        </fieldset>
        <button class="btn"><a href="./index.php">Voltar</a></button>
    </div>
    
</body>
</html>
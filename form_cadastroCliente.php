<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>

<body>

<h3> Cadastro do Cliente </h3>

<form method="POST" action="cadastroCliente.php">

<p> Nome: <input type="text" name="nome" required> </p>
<p> Telefone: <input type="text" name="telefone" required> </p>
<p> Email: <input type="email" name="email" required> </p>
<p> CPF: <input type="text" name="cpf" required> </p>
<p> <button type="submit">Cadastrar</button>
</form>
    
</body>
</html>
<?php

  if(isset($_POST['submit']))
  {
    // print_r('Nome: ' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Email: ' . $_POST['email']);
    // print_r('<br>');
    // print_r('Telefone ' . $_POST['telefone']);
    // print_r('<br>');
    // print_r('Sexo: ' . $_POST['genero']);
    // print_r('<br>');
    // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
    // print_r('<br>');
    // print_r('Cidade ' . $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado: ' . $_POST['estado']);
    // print_r('<br>');
    // print_r('Endereco ' . $_POST['endereco']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $confirmarsenha = $_POST['confirmarsenha'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $data_nasc = $_POST['data_nascimento'];
    $nomematerno = $_POST['nomematerno'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['genero'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $telefonefixo = $_POST['telefonefixo'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,confirmarsenha,usuario,email,data_nascimento,nomematerno,cpf,sexo,endereco,telefone,telefonefixo) 
    VALUES ('$nome','$senha','$confirmarsenha','$usuario','$email','$data_nasc','$nomematerno','$cpf','$sexo','$endereco','$telefone','$telefonefixo')");

    header('Location: login.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Formulário | GN</title>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="confirmarsenha" id="confirmarsenha" class="inputUser" required>
                    <label for="senha" class="labelInput">Confirmar senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="usuario" id="usuario" class="inputUser" required>
                    <label for="usuario" class="labelInput">Usuario</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nomematerno" id="nomematerno" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Materno</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="telefonefixo" id="telefonefixo" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone fixo</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
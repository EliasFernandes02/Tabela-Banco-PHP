<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '123456';
$dbName = 'alunos';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);


if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $matricula = $_POST['matricula'];
    $query = mysqli_query($conexao,"INSERT INTO tb_aluno(nome,cidade,matricula)VALUES('$nome','$cidade','$matricula')");

    if($query){
        echo"<h3>Cadastro efetuado com sucesso</h3> ";
    } else {
        echo"não cadastrado";
    }
}


?>

<form action="cadastro.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">

        <label>Cidade:</label>
        <input type="text" name="cidade">

        <label>Matricula:</label>
        <input type="number" name="matricula">

        <button name="cadastrar">Cadastrar</button>
    </form>
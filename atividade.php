<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<?php
include_once('config.php');


$sql = "SELECT * FROM tb_aluno ORDER BY id DESC";

$result = $conexao->query($sql);

?>

<div>
    <h1>Alunos</h1>
    <hr>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Matricula</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" .$user_data['nome']."</td>";
                echo "<td>" .$user_data['cidade']."</td>";   
                echo "<td>" .$user_data['matricula']."</td>";   
                echo "<tr>";      
            }
            ?>
        </tbody>
    </table>
</div>
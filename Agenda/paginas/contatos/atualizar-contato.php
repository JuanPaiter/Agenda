<header>
    <h3>Atualizar Contato</h3>
</header>
<?php
$idcontato = mysqli_real_escape_string($conexao, $_POST["idcontato"]);
$nomeContato = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
$emailContato = mysqli_real_escape_string($conexao, $_POST["emailContato"]);
$telefoneContato = mysqli_real_escape_string($conexao, $_POST["telefoneContato"]);
$enderecoContato = mysqli_real_escape_string($conexao, $_POST["enderecoContato"]);
$sexoContato = mysqli_real_escape_string($conexao, $_POST["sexoContato"]);
$datanascContato = mysqli_real_escape_string($conexao, $_POST["datanascContato"]);
$sql = "UPDATE tbcontatos SET
nomeContato = '{$nomeContato}',
emailContato = '{$emailContato}',
telefoneContato ='{$telefoneContato}',
enderecoContato = '{$enderecoContato}',
sexoContato = '{$sexoContato}',
datanascContato = '{$datanascContato}'

WHERE idcontato = '{$idcontato}'

";
    $rs = mysqli_query($conexao, $sql) or die ("Erro ao executar a consulta." . mysqli_error($conexao));

    echo "O registro foi Atualizado com sucesso.";

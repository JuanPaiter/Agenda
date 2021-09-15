<header>
    <h3>Exluir Contato</h3>
</header>

<?php
$idcontato = mysqli_real_escape_string($conexao, $_GET["idcontato"]);
$sql = "DELETE FROM tbcontatos WHERE idcontato= '{$idcontato}'";

mysqli_query($conexao, $sql) or die ("Erro ao Excluir o registro" . mysqli_error($conexao));

echo "Registro excuido com sucesso!";

?>
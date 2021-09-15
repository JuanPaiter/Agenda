<?php
$idcontato = $_GET["idcontato"];
$sql = "SELECT * FROM tbcontatos WHERE idcontato = {$idcontato}"; 
$rs = mysqli_query($conexao, $sql) or die ("Erro ao recuperar os dados!" . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>
<header>
    <h3>Editar Contato</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-contato" method="post">
    <div>
        <label for="idcontato">ID</label>
        <input type="text" name="idcontato" value="<?=$dados["idcontato"]?>">

    </div>
    <div>
        <label for="nomeContato">Nome</label>
        <input type="text" name="nomeContato" value="<?=$dados["nomeContato"]?>">

    </div>
    <div>
        <label for="emailContato">E-mail</label>
        <input type="email" name="emailContato" value="<?=$dados["emailContato"]?>">

    </div>
    <div>
        <label for="telefoneContato">Endereço</label>
        <input type="text" name="enderecoContato" value="<?=$dados["enderecoContato"]?>">

    </div>
    <div>
        <label for="enderecoContato">Telefone</label>
        <input type="text" name="telefoneContato" value="<?=$dados["telefoneContato"]?>">

    </div>
    <div>
        <label for="sexoContato">Sexo</label>
        <input type="text" name="sexoContato" value="<?=$dados["sexoContato"]?>">

    </div>
    <div>
        <label for="datanascContato">Data de Nascimento</label>
        <input type="Date" name="datanascContato" value="<?=$dados["datanascContato"]?>">

    </div>
    <div>
        <input type="submit" value="Atualizar" name="btnAtualizar">
    </div>
    </form>
</div>
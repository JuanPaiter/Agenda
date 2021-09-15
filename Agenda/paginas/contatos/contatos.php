<header>
    <h3>Pagina Contatos</h3>
</header>
<div>
<a href="index.php?menuop=cad-contato">Novo Contato</a>

</div>
<div>
    <form action="index.php?menuop=contatos" method="post">
    <input type="text", name="txt_pesquisa">
    <input type="submit" value="Pesquisar">
    </form>
</div>
<div clas="tabela">
<table class="table table-dark table-striped table-bordered">
<thead>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>TELEFONE</th>
        <th>ENDEREÇO</th>
        <th>SEXO</th>
        <th>DATA DE NASC</th>   
        <th>EDIÇÃO</th>
        <th>EXCLUIR</th>      
               
        
    </tr>
</thead>
<tbody>
    <?php

    $quantidade = 10;

$pagina = (isset($_GET['pagina']))?(int)$_GET['pagina']:1;
$inicio =($quantidade * $pagina) - $quantidade;

    $txt_pesquisa=(isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";
    $sql = "SELECT
    idcontato,
   upper(nomeContato) AS nomeContato,
   lower(emailContato) AS emailContato,
   telefoneContato, 
   upper(enderecoContato) AS enderecoContato,
    CASE
       WHEN sexoContato = 'F' THEN 'FEMININO'
       WHEN sexoContato = 'M' THEN 'MASCULINO'
       ELSE 
           'NÃO ESPECIFICADO'
           END AS  sexoContato,
           DATE_FORMAT(datanascContato, '%d/%m/%Y') as datanascContato
           FROM  tbcontatos
            WHERE
             idcontato='{$txt_pesquisa}' or 
             nomeContato LIKE '%{$txt_pesquisa}%'
             ORDER BY nomeContato ASC
             LIMIT $inicio, $quantidade
             
             ";



    $rs = mysqli_query($conexao, $sql) or die ("Erro ao executar a consulta!" . mysqli_error($conexao));

    while($dados = mysqli_fetch_assoc($rs)){

    ?>
    <tr>
        <td><?=$dados["idcontato"]?></td>
        <td><?=$dados["nomeContato"]?></td>
        <td><?=$dados["emailContato"]?></td>
        <td><?=$dados["telefoneContato"]?></td>
        <td><?=$dados["enderecoContato"]?></td>
        <td><?=$dados["sexoContato"]?></td>
        <td><?=$dados["datanascContato"]?></td>
        <td><a href="index.php?menuop=editar-contato&idcontato=<?=$dados["idcontato"]?>">Editar</a></td> 
        <td><a href="index.php?menuop=excluir-contato&idcontato=<?=$dados["idcontato"]?>">Excluir</a></td>   
    </tr>
    <?php
    }
    ?>
    
</tbody>

</table>
</div>
<br>

<?php
$sqlTotal = "SELECT idcontato FROM tbcontatos";
$qrTotal = mysqli_query($conexao, $sqlTotal) or die (mysqli_error($conexao));
$numTotal = mysqli_num_rows($qrTotal);
$totalPaginas = ceil($numTotal/$quantidade);
echo "Total de Registros: $numTotal <br> ";

for($i=1;$i<=$totalPaginas;$i++){

    if($i==$pagina){
        echo $i;

    }else{
        echo "<a href=\"?menuop=contatos&pagina=$i\">$i</a> ";
    }

}


?>
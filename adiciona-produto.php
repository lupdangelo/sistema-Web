<?php include("cabecalho.php");
	  include("conecta.php") ;
	  include("banco-produto.php");


$nome = $_GET["nome"];
$preco = $_GET["preco"];


if(insereProduto($conexao,$nome,$preco)){ ?>
<p class="alert-success"> Produto <?php echo $nome; ?> de <?= $preco; ?> reais foi adicionado com sucesso <p>
<?php } else { $msg = mysqli_error($conexao) ?>
	<p class="alert-danger"> Produto <?php echo $nome; ?> não foi adicionado: <?= $msg ?>  <p>
<?php
}	
?>




<?php include("rodape.php") ?>
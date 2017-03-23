<?php include("cabecalho.php");
	  include("conecta.php") ;
	  include("banco-produto.php");


$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];

if(insereProduto($conexao,$nome,$preco,$descricao)){ ?>
<p class="alert-success"> Produto <?php echo $nome; ?> de <?= $preco; ?> reais foi adicionado com sucesso <p>
<?php } else { $msg = mysqli_error($conexao) ?>
	<p class="alert-danger"> Produto <?php echo $nome; ?> não foi adicionado: <?= $msg ?>  <p>
<?php
}	
?>




<?php include("rodape.php") ?>
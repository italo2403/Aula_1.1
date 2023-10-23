<?php
include("conexao.php");
	$nome=$_POST['nome'];
	$resposta=$_POST['questao1'];
	$resposta2 =$_POST['questao2'];
	
	$sql="INSERT INTO questoes(nome,  questao1, questao2)
	VALUES ('$nome', '$resposta', '$resposta2')";
	if(mysqli_query($conexao, $sql)){
		header("Location: index.html");
	}else{
		echo "Erro". mysqli_connect_error($conexao);
	}
	
	mysqli_close($conexao);
?>
<?php 
	$servidor='localhost';
	$usuario = 'root';
	$senha = 'root';
	$conexao = mysqli_connect($servidor,$usuario,$senha);
	if($conexao){
		if(mysqli_select_db($conexao,'bibliomania')) 
		echo "  ";
		else echo "Erro ao escolher BD";
	}
	else echo "Erro na conexão!";
?>
	
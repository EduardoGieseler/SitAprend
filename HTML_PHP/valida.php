<?php
	if(isset($_POST['op'])){
		$op = $_POST['op'];
		if($op == "cadastro"){
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$login = $_POST['login'];
			$senha = $_POST['senha'];
			
			header("Location: tela_cadastro.php?cadastrado");
		}else if($op == "login"){
			$login = $_POST['login'];
			$senha = $_POST['senha'];
			
			header("Location: tela_cadastro.php?logado");
		}
	}
?>
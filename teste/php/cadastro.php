<?php
	include("conexao.php");
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	
	
	$result_usuario = "INSERT INTO tb_usu (Id, Nome, Email) VALUES (null,'$nome','$Email')";

if (mysqli_query($conecta,$result_usuario)) {
	//echo "<script>alert('Cadastro efetuado com sucesso!'); document.location.href='../inicio/inicio.php';</script> ";
				
			}else{
				//echo "<script>alert('Erro ao tentar se cadastrar. Tente novamente!'); document.location.href='../inicio/usuario.php';</script>";
			}
	
			
	
	mysqli_close($conecta);
?>
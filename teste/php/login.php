<?php
	include("conexao.php");
	$email = $_POST['email'];
	$Senha = $_POST['Senha'];


	$sql=" SELECT * FROM tb_usu
			WHERE email = '$email'
			AND Senha = '$Senha' ";

	$result=mysqli_query($conecta,$sql);

		if($consulta=mysqli_fetch_array($result))
	{
        header('location:./index.html');
	}
	else{
			echo "<script>alert('Erro ao tentar logar. Tente novamente!'); document.location.href='./login.html';</script>";

	}
	mysqli_free_result($result);
	mysqli_close($conecta);
?>
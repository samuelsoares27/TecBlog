<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sistema de Cadastro</title>
	<link rel="stylesheet" href="css/estilo_cadastro.css">
	<!--link rel="stylesheet" href="css/estilo.css"-->

</head>
<body>
<div id="area-cabecalho">   <!--CABEÇALHO-->
				<h2 class="h2-titulo">Cadastro de Usuários</h2>
				<hr><br><br>
				<div id="area-cadastro">
					<form method="post" action="processa.php">
						<p>Nome</p>
						<input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
						<p>Email</p>
						<input type="email" name="email" class="campo" maxlength="50" required ><br>
						<p>Profissão</p>
						<input type="text" name="profissao" class="campo" maxlength="40" required ><br>
						<input type="submit" value="Salvar" class="btn">
						<input type="reset" value="Limpar" class="btn">
					</form>
		</div>
	</div>

	
</div>
</body>
</html>
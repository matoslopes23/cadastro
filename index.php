<!DOCTYPE html>
<html>
<head>
	<title>Sistema de cadastro</title>
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- CSS do materialize -->
      <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<meta charset="utf-8">
</head>
<body>
	<nav class="blue">
		<div class="nav-wrapper container">
			<div class="brand-logo light">
				Sistema Biblioteca
			</div>
			<ul class="right">
				<li><a href=""><i class="material-icons left">person_add</i>Cadastrar</a></li>
				<li><a href=""><i class="material-icons left">edit</i>Editar</a></li>
				<li><a href=""><i class="material-icons left">delete</i>Excluir</a></li>
				<li><a href=""><i class="material-icons left">search</i>Consultar</a></li>
				
			</ul>
			
		</div>
		
	</nav>
	<!-- FORMULARIO DE CADASTRO -->
	<div class="row container">
		<p>&nbsp</p>
		<form action="" method="post" class="rol s12">
			<fieldset class="formulario">
				<legend><img src="imagens/alunos.png" alt="[imagem]" width="100"></legend>
				<h5 class="light center">Cadastro de alunos</h5>

				<!-- Campo Nome -->
				<div class="input-field col s12">
					<i class="material-icons prefix">account_circle</i>
					<input type="text" name="nome" id="nome" maxlength="40" required="" autofocus="">
					<label for="nome">Nome do Aluno</label>
				</div>
				<!-- Campo Sobrenome -->
				<div class="input-field col s12">
					<i class="material-icons prefix">account_circle</i>
					<input type="text" name="Sobrenome" id="Sobrenome" maxlength="40" required="">
					<label for="nome">Sobrenome do Aluno</label>
				</div>
				<!-- Campo Nome -->
				<div class="input-field col s12">
					<i class="material-icons prefix">recent_actors</i>
					<input type="text" name="cpf" id="cpf" maxlength="13" required="">
					<label for="nome">CPF</label>
				</div>
				<!-- Botões -->
				<div class="input-field col s12">
					<input type="submit" value="Cadastrar" class="btn blue">
					<input type="reset" value="Limpar" class="btn red">

					
				</div>
			</fieldset>
			
		</form>
		
	</div>
	<!-- Arquivos Jquery e java script -->
	<script type="text/javascript" src="materialize/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	<!-- INICIALIZAÇÃO JQUERY -->
	<script type="text/javascript">
		$(document).ready(function(){

		});
	</script>

</body>
</html>
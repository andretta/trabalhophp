	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<li class="navbar-brand"><a href="/">Home</a></li>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administração <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="CadastraUsuario.php">Cadastro de Usuarios</a></li>
					<li><a href="CadastraPerguntas.php">Cadastro de Perguntas</a></li>
				</ul>
        	</li>
				<li><a href="ListaUsuarios.php">Lista de Usuários</a></li>
				<li><a href="ListaPerguntas.php">Lista de Perguntas</a></li>
				<li><a href="JogoPerguntas.php">JOGAR</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><?php if (isset($_SESSION["logado"])) { ?><a href="logout.php">sair</a><?php } ?></li>
			</ul>
			</div>
		</div>
	</nav>
	
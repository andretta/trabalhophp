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
				<li><a href="ListaUsuario.php">Usuários</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><?php if (isset($_SESSION["logado"])) { ?><a href="logout.php">sair</a><?php } ?></li>
			</ul>
			</div>
		</div>
	</nav>
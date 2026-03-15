<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dash</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="dashboard-container">

<nav>

<ul>
<li><a href="#">Início</a></li>
<li><a href="#">Projetos</a></li>
<li><a href="#">Relatórios</a></li>
<li><a href="#">Configurações</a></li>
</ul>

<div class="perfil-usuário">
<img src="https://ui-avatars.com/api/?name=Yasmin+Neves&background=008080&color=fff" alt="Avatar">
<span>Yasmin Neves</span>
</div>

</nav>

<main>

<section class="container-cards">

<article>
<h2>Módulo de Usuários</h2>
<p>Gerencie os acessos e permissões dos sistemas nesta área.</p>
<a href="#" class="btn">Acessar</a>
</article>

<article>
<h2>Relatório de Vendas</h2>
<p>Acompanhe os gráficos de desempenho deste mês.</p>
<a href="#" class="btn">Acessar</a>
</article>

<article>
<h2>Configurações do Servidor</h2>
<p>Ajuste as portas do Apache e o banco de dados.</p>
<a href="#" class="btn">Acessar</a>
</article>

</section>

</main>

</div>

<footer>
<p>&copy; <?php echo date('Y'); ?> - Desenvolvido na aula de Web I</p>
</footer>

</body>
</html>
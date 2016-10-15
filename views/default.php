<html>
<head>
	<title>Stockage des données numériques</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
</head>

<body>

	<nav>
		
		<ul>
			<li><a href="index.php?p=home" class="active">Accueil</a></li>
			<li><a href="index.php?p=page2">Page 2</a></li>
			<li><a href="index.php?p=page3">Page 3</a></li>
			<li><a href="index.php?p=page4">Page 4</a></li>
			<li><a href="index.php?p=quiz">Quiz</a></li>
		</ul>

	</nav>

	<div id="container">
	
		<?= $content; ?>

	</div>

	<footer>
		
		<strong>Projet SIN - Stockage des données numériques</strong> | <i>Quentin Aslan / Pierre Sanson / Numa Balard / Quentin Mariucci</i>

	</footer>

</body>

</html>
<?php
	$profil = $_GET['profil'];

	if (isset($profil)) {
		setcookie("profil", $profil, time()+3600);
		setcookie("logged_in", 1, time()+3600);
		header('Location: index.php');
		exit();
	}
?>
<?php require_once "config.php";?>
<?php require_once "header.php";?>
<body>
	<?php require_once "menu.php";?>
	<div class="container">
		<p><a href='choose_profil.php?profil=media' class="btn btn-large btn-primary" type="button">Media</a></p>
		<p><a href='choose_profil.php?profil=revendeur' class="btn btn-large btn-primary" type="button">Revendeur</a></p>
 	</div> <!-- /container -->
	<?php require_once "all_js_footer.php";?>
	 </body>
</html>
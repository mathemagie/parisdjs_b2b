<?php require_once "config.php";?>
<?php require_once "header.php";?>
<body>
	<?php require_once "menu.php";?>

	<div class="container">
		<?php
			$profil = $_GET['profil'];

			if (isset($profil)) setcookie("_profil", $profil, time()+3600);
		?>
 	</div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

    <script src="js/holder/holder.js"></script>
	
  </body>
</html>

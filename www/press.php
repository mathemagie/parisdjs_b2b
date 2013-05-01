<?php require_once "header.php";?>
<body>
<?php require_once "menu.php";?>

    <div class="container">

    
    
      <h1>Press</h1>
		<p>Find here the press releases, media and information about our projects</p>

	<ul class="thumbnails">
   <?php for ($i=1; $i<5; $i++) {?>
    <li class="span3">
      <div class="thumbnail">
          <a href="press_single.php" class="">
            <img class="img-polaroid" src="img/Grant_Phabao_presents_The_Lone_Ranger_and_Echo_Minott-Plant_Up_A_Vineyard.jpg" alt=""/>
        </a>
        <h3>Titre press release</h3>
      
      </div>
    </li>
  <?php } ?>

  </ul>

  <ul class="thumbnails">
    <li class="span3">
      <div class="thumbnail">
        <img class="img-polaroid" src="img/Grant_Phabao_presents_The_Lone_Ranger_and_Echo_Minott-Plant_Up_A_Vineyard.jpg" alt=""/>
        <h3>Titre press release</h3>
      
      </div>
    </li>
   <li class="span3">
    <div class="thumbnail">
      <img class="img-polaroid" src="img/Grant_Phabao_presents_The_Lone_Ranger_and_Echo_Minott-Plant_Up_A_Vineyard.jpg" alt=""/>
      <h3>Titre press release</h3>
  
    </div>
    </li>
    <li class="span3">
      <div class="thumbnail">
      <img class="img-polaroid" src="img/Grant_Phabao_presents_The_Lone_Ranger_and_Echo_Minott-Plant_Up_A_Vineyard.jpg" alt=""/>
        <h3>Titre press release</h3>
       
      </div>
    </li>
    <li class="span3">
      <div class="thumbnail">
         <img class="img-polaroid" src="img/Grant_Phabao_presents_The_Lone_Ranger_and_Echo_Minott-Plant_Up_A_Vineyard.jpg" alt=""/>
        <h3>Titre press release</h3>

      </div>
    </li>
  </ul>
		
      <!-- Example row of columns -->
     <!-- <div class="row">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>-->

	  <div class="pagination">
  <ul>
    <li><a href="#">Prev</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</div>
	  
      <hr>

      <footer>
        <p>&copy; ParisDjs 2013</p>
      </footer>

    </div> <!-- /container -->

  <?php require_once "all_js_footer.php";?>
  </body>
</html>

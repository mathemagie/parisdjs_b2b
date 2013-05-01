<?php require_once "header.php";?>
<body>
<?php require_once "menu.php";?>

    <div class="container">
    	 <div class="row-fluid">
    	 	<div class="span4">

				<ul class="thumbnails">
			   <?php for ($i=1; $i<2; $i++) {?>
			    <li class="">
			      <div class="thumbnail">
			          <a href="press_single.php" class="">
			            <img class="img-polaroid" src="img/Grant_Phabao_presents_The_Lone_Ranger_and_Echo_Minott-Plant_Up_A_Vineyard.jpg" alt=""/>
			        </a>
			        <h3>Titre press release</h3>
			      
			      </div>
			    </li>
			  <?php } ?>

			  </ul>
			</div>
			<div class="span8">

		 		 <iframe width="400" height="100" style="position: relative; display: block; width: 400px; height: 100px;" src="http://bandcamp.com/EmbeddedPlayer/v=2/album=874105357/size=venti/bgcol=FFFFFF/linkcol=4285BB/" allowtransparency="true" frameborder="0"><a href="http://parisdjs.bandcamp.com/album/tokuta-grant-phabao-remix-feat-soul-sugar">Tokuta (Grant Phabao Remix feat. Soul Sugar) by Jungle Fire</a></iframe>
		 		 <br>

		 		 <!--<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F40363489"></iframe>-->
	 		</div>
	 	</div>
    </div> <!-- /container -->

  <?php require_once "all_js_footer.php";?>
  </body>
</html>

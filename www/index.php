<?php require_once "config.php";?>
<?php require_once "header.php";?>
  <body>
  <?php require_once "menu.php";?>

  

    <div class="container">
       <p>
        debug profil : 
        <?php
          if (is_media()) echo "media";
          if (is_revendeur()) echo "revendeur";
        ?>
        </p>

		<!--start: Wrapper-->
		<div id="wrapper">

<div class="navbar" id="options">
	<div class="navbar-inner">
		<ul id="filters" class="nav option-set">
			<li><a href="#" data-filter=".catalog">Digital<br/>Catalog</a></li>
			<li><a href="#" data-filter=".preorders">Vynyl/CD/Merch.<br/>Preorders</a></li>
			<li><a href="#" data-filter=".stock">Vynyl/CD/Merch.<br/>Stock</a></li>
			<li><a href="#" data-filter=".projects">Upcoming<br/>Projects</a></li>
			<li><a href="#" data-filter=".labels">Artists &<br/>Labels</a></li>
			<li><a href="#" data-filter="*" class="selected">Show<br/>all</a></li>
		</ul>
	</div>
</div>
			<!-- start: Wall -->
			<div id="wall">

				<div class="item catalog">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/ggp.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Gregsky & Grant Phabao</p>
							<h2 class="maj">La danse du shadow</h2>
							<p>Paris DJs / Noble Art 001</p>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</p>
							<p class="meta">04/05/2013</p>
							<a href="#" class="btn btn-warning maj">Download</a>
						</div>
					</div>
				</div>

				<div class="item preorders">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/good-for-you.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Paris DJs Soundsystem</p>
							<h2 class="maj">Dis is good for you</h2>							
							<p>Paris DJs 008</p>
							<p>
								Afrofunk/Tropical/Reggae <br/>
								2LP at 500 copies only <span class="pull-right">12.50€</span></p>
							
							<p>Progress status: <span class="pull-right strong">80%</span>
								<div class="progress">
									<div class="bar" style="width: 80%;"></div>
								</div>
								20 units left before pressing
							</p>
							<a href="#" class="btn btn-warning maj">Pre-order</a>
						</div>
					</div>
				</div>

				<div class="item stock">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/fever.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Grant Phabao & The Lone Ranger</p>
							<h2 class="maj">Fever / Version</h2>
							<p>Paris DJs / T.I.M.E.C. 45 01
							<br/>Reggae/Dub 7"
							<br/>300 copies only <span class="pull-right">5.00€</span>
							</p>
							<p>Stock level: <span class="pull-right strong">60%</span>
								<div class="progress">
									<div class="bar" style="width: 60%;"></div>
								</div>
								120 units left in stock
							</p>
							<a href="#" class="btn btn-warning maj">Order</a>
						</div>
					</div>
				</div>

				<div class="item projects">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/rt.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Paris DJs Soundsystem</p>
							<h2 class="maj">Rise of the Troubadour...</h2>
							<p>Paris DJs</p>
							<p>Tropical grooves / Carribean Funk / Afro Beat / Afro Funk / Ethio Jazz...</p>
							<p>Deadline to submit tracks: May 15, 2013</p>
							<a href="#" class="btn btn-warning maj">Submit Music</a>
						</div>
					</div>
				</div>

				<div class="item labels">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/lone-ranger.jpg" alt=""></a>
						<div class="description">
							<h2 class="maj">The Lone Ranger</h2>
							<p class="maj">(Jamaïca)</p>
							<p>
							Featured in:
							<ul>
								<li>4 physical releases</li>
								<li>6 digital releases</li>
							</ul></p>
							<p>Lone ranger (born Anthony Alphanso Waldron) Lone ranger (born Anthony...
							</p>
							<a href="#" class="btn btn-warning maj">More info</a>
						</div>
					</div>
				</div>

				<div class="item catalog">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/ggp.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Gregsky & Grant Phabao</p>
							<h2 class="maj">La danse du shadow</h2>
							<p>Paris DJs / Noble Art 001</p>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</p>
							<p class="meta">04/05/2013</p>
							<a href="#" class="btn btn-warning maj">Download</a>
						</div>
					</div>
				</div>

				<div class="item preorders">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/good-for-you.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Paris DJs Soundsystem</p>
							<h2 class="maj">Dis is good for you</h2>							
							<p>Paris DJs 008</p>
							<p>
								Afrofunk/Tropical/Reggae <br/>
								2LP at 500 copies only <span class="pull-right">12.50€</span></p>
							
							<p>Progress status: <span class="pull-right strong">80%</span>
								<div class="progress">
									<div class="bar" style="width: 80%;"></div>
								</div>
								20 units left before pressing
							</p>
							<a href="#" class="btn btn-warning maj">Pre-order</a>
						</div>
					</div>
				</div>

				<div class="item stock">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/fever.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Grant Phabao & The Lone Ranger</p>
							<h2 class="maj">Fever / Version</h2>
							<p>Paris DJs / T.I.M.E.C. 45 01
							<br/>Reggae/Dub 7"
							<br/>300 copies only <span class="pull-right">5.00€</span>
							</p>
							<p>Stock level: <span class="pull-right strong">60%</span>
								<div class="progress">
									<div class="bar" style="width: 60%;"></div>
								</div>
								120 units left in stock
							</p>
							<a href="#" class="btn btn-warning maj">Order</a>
						</div>
					</div>
				</div>

				<div class="item projects">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/rt.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Paris DJs Soundsystem</p>
							<h2 class="maj">Rise of the Troubadour...</h2>
							<p>Paris DJs</p>
							<p>Tropical grooves / Carribean Funk / Afro Beat / Afro Funk / Ethio Jazz...</p>
							<p>Deadline to submit tracks: May 15, 2013</p>
							<a href="#" class="btn btn-warning maj">Submit Music</a>
						</div>
					</div>
				</div>

				<div class="item labels">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/lone-ranger.jpg" alt=""></a>
						<div class="description">
							<h2 class="maj">The Lone Ranger</h2>
							<p class="maj">(Jamaïca)</p>
							<p>
							Featured in:
							<ul>
								<li>4 physical releases</li>
								<li>6 digital releases</li>
							</ul></p>
							<p>Lone ranger (born Anthony Alphanso Waldron) Lone ranger (born Anthony...
							</p>
							<a href="#" class="btn btn-warning maj">More info</a>
						</div>
					</div>
				</div>

				<div class="item catalog">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/ggp.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Gregsky & Grant Phabao</p>
							<h2 class="maj">La danse du shadow</h2>
							<p>Paris DJs / Noble Art 001</p>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</p>
							<p class="meta">04/05/2013</p>
							<a href="#" class="btn btn-warning maj">Download</a>
						</div>
					</div>
				</div>

				<div class="item preorders">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/good-for-you.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Paris DJs Soundsystem</p>
							<h2 class="maj">Dis is good for you</h2>							
							<p>Paris DJs 008</p>
							<p>
								Afrofunk/Tropical/Reggae <br/>
								2LP at 500 copies only <span class="pull-right">12.50€</span></p>
							
							<p>Progress status: <span class="pull-right strong">80%</span>
								<div class="progress">
									<div class="bar" style="width: 80%;"></div>
								</div>
								20 units left before pressing
							</p>
							<a href="#" class="btn btn-warning maj">Pre-order</a>
						</div>
					</div>
				</div>

				<div class="item stock">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/fever.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Grant Phabao & The Lone Ranger</p>
							<h2 class="maj">Fever / Version</h2>
							<p>Paris DJs / T.I.M.E.C. 45 01
							<br/>Reggae/Dub 7"
							<br/>300 copies only <span class="pull-right">5.00€</span>
							</p>
							<p>Stock level: <span class="pull-right strong">60%</span>
								<div class="progress">
									<div class="bar" style="width: 60%;"></div>
								</div>
								120 units left in stock
							</p>
							<a href="#" class="btn btn-warning maj">Order</a>
						</div>
					</div>
				</div>

				<div class="item projects">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/rt.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Paris DJs Soundsystem</p>
							<h2 class="maj">Rise of the Troubadour...</h2>
							<p>Paris DJs</p>
							<p>Tropical grooves / Carribean Funk / Afro Beat / Afro Funk / Ethio Jazz...</p>
							<p>Deadline to submit tracks: May 15, 2013</p>
							<a href="#" class="btn btn-warning maj">Submit Music</a>
						</div>
					</div>
				</div>

				<div class="item labels">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/lone-ranger.jpg" alt=""></a>
						<div class="description">
							<h2 class="maj">The Lone Ranger</h2>
							<p class="maj">(Jamaïca)</p>
							<p>
							Featured in:
							<ul>
								<li>4 physical releases</li>
								<li>6 digital releases</li>
							</ul></p>
							<p>Lone ranger (born Anthony Alphanso Waldron) Lone ranger (born Anthony...
							</p>
							<a href="#" class="btn btn-warning maj">More info</a>
						</div>
					</div>
				</div>

				<div class="item catalog">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/ggp.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Gregsky & Grant Phabao</p>
							<h2 class="maj">La danse du shadow</h2>
							<p>Paris DJs / Noble Art 001</p>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</p>
							<p class="meta">04/05/2013</p>
							<a href="#" class="btn btn-warning maj">Download</a>
						</div>
					</div>
				</div>

				<div class="item preorders">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/good-for-you.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Paris DJs Soundsystem</p>
							<h2 class="maj">Dis is good for you</h2>							
							<p>Paris DJs 008</p>
							<p>
								Afrofunk/Tropical/Reggae <br/>
								2LP at 500 copies only <span class="pull-right">12.50€</span></p>
							
							<p>Progress status: <span class="pull-right strong">80%</span>
								<div class="progress">
									<div class="bar" style="width: 80%;"></div>
								</div>
								20 units left before pressing
							</p>
							<a href="#" class="btn btn-warning maj">Pre-order</a>
						</div>
					</div>
				</div>

				<div class="item stock">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/fever.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Grant Phabao & The Lone Ranger</p>
							<h2 class="maj">Fever / Version</h2>
							<p>Paris DJs / T.I.M.E.C. 45 01
							<br/>Reggae/Dub 7"
							<br/>300 copies only <span class="pull-right">5.00€</span>
							</p>
							<p>Stock level: <span class="pull-right strong">60%</span>
								<div class="progress">
									<div class="bar" style="width: 60%;"></div>
								</div>
								120 units left in stock
							</p>
							<a href="#" class="btn btn-warning maj">Order</a>
						</div>
					</div>
				</div>

				<div class="item projects">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/rt.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Paris DJs Soundsystem</p>
							<h2 class="maj">Rise of the Troubadour...</h2>
							<p>Paris DJs</p>
							<p>Tropical grooves / Carribean Funk / Afro Beat / Afro Funk / Ethio Jazz...</p>
							<p>Deadline to submit tracks: May 15, 2013</p>
							<a href="#" class="btn btn-warning maj">Submit Music</a>
						</div>
					</div>
				</div>

				<div class="item labels">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/lone-ranger.jpg" alt=""></a>
						<div class="description">
							<h2 class="maj">The Lone Ranger</h2>
							<p class="maj">(Jamaïca)</p>
							<p>
							Featured in:
							<ul>
								<li>4 physical releases</li>
								<li>6 digital releases</li>
							</ul></p>
							<p>Lone ranger (born Anthony Alphanso Waldron) Lone ranger (born Anthony...
							</p>
							<a href="#" class="btn btn-warning maj">More info</a>
						</div>
					</div>
				</div>

				<div class="item catalog">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/ggp.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Gregsky & Grant Phabao</p>
							<h2 class="maj">La danse du shadow</h2>
							<p>Paris DJs / Noble Art 001</p>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</p>
							<p class="meta">04/05/2013</p>
							<a href="#" class="btn btn-warning maj">Download</a>
						</div>
					</div>
				</div>

				<div class="item preorders">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/good-for-you.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Paris DJs Soundsystem</p>
							<h2 class="maj">Dis is good for you</h2>							
							<p>Paris DJs 008</p>
							<p>
								Afrofunk/Tropical/Reggae <br/>
								2LP at 500 copies only <span class="pull-right">12.50€</span></p>
							
							<p>Progress status: <span class="pull-right strong">80%</span>
								<div class="progress">
									<div class="bar" style="width: 80%;"></div>
								</div>
								20 units left before pressing
							</p>
							<a href="#" class="btn btn-warning maj">Pre-order</a>
						</div>
					</div>
				</div>

				<div class="item stock">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/fever.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Grant Phabao & The Lone Ranger</p>
							<h2 class="maj">Fever / Version</h2>
							<p>Paris DJs / T.I.M.E.C. 45 01
							<br/>Reggae/Dub 7"
							<br/>300 copies only <span class="pull-right">5.00€</span>
							</p>
							<p>Stock level: <span class="pull-right strong">60%</span>
								<div class="progress">
									<div class="bar" style="width: 60%;"></div>
								</div>
								120 units left in stock
							</p>
							<a href="#" class="btn btn-warning maj">Order</a>
						</div>
					</div>
				</div>

				<div class="item projects">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/rt.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Paris DJs Soundsystem</p>
							<h2 class="maj">Rise of the Troubadour...</h2>
							<p>Paris DJs</p>
							<p>Tropical grooves / Carribean Funk / Afro Beat / Afro Funk / Ethio Jazz...</p>
							<p>Deadline to submit tracks: May 15, 2013</p>
							<a href="#" class="btn btn-warning maj">Submit Music</a>
						</div>
					</div>
				</div>

				<div class="item labels">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/lone-ranger.jpg" alt=""></a>
						<div class="description">
							<h2 class="maj">The Lone Ranger</h2>
							<p class="maj">(Jamaïca)</p>
							<p>
							Featured in:
							<ul>
								<li>4 physical releases</li>
								<li>6 digital releases</li>
							</ul></p>
							<p>Lone ranger (born Anthony Alphanso Waldron) Lone ranger (born Anthony...
							</p>
							<a href="#" class="btn btn-warning maj">More info</a>
						</div>
					</div>
				</div>

				<div class="item catalog">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/ggp.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Gregsky & Grant Phabao</p>
							<h2 class="maj">La danse du shadow</h2>
							<p>Paris DJs / Noble Art 001</p>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</p>
							<p class="meta">04/05/2013</p>
							<a href="#" class="btn btn-warning maj">Download</a>
						</div>
					</div>
				</div>

				<div class="item preorders">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/good-for-you.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Paris DJs Soundsystem</p>
							<h2 class="maj">Dis is good for you</h2>							
							<p>Paris DJs 008</p>
							<p>
								Afrofunk/Tropical/Reggae <br/>
								2LP at 500 copies only <span class="pull-right">12.50€</span></p>
							
							<p>Progress status: <span class="pull-right strong">80%</span>
								<div class="progress">
									<div class="bar" style="width: 80%;"></div>
								</div>
								20 units left before pressing
							</p>
							<a href="#" class="btn btn-warning maj">Pre-order</a>
						</div>
					</div>
				</div>

				<div class="item stock">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/fever.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Grant Phabao & The Lone Ranger</p>
							<h2 class="maj">Fever / Version</h2>
							<p>Paris DJs / T.I.M.E.C. 45 01
							<br/>Reggae/Dub 7"
							<br/>300 copies only <span class="pull-right">5.00€</span>
							</p>
							<p>Stock level: <span class="pull-right strong">60%</span>
								<div class="progress">
									<div class="bar" style="width: 60%;"></div>
								</div>
								120 units left in stock
							</p>
							<a href="#" class="btn btn-warning maj">Order</a>
						</div>
					</div>
				</div>

				<div class="item projects">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/rt.jpg" alt=""></a>
						<div class="description">
							<p class="artist">Paris DJs Soundsystem</p>
							<h2 class="maj">Rise of the Troubadour...</h2>
							<p>Paris DJs</p>
							<p>Tropical grooves / Carribean Funk / Afro Beat / Afro Funk / Ethio Jazz...</p>
							<p>Deadline to submit tracks: May 15, 2013</p>
							<a href="#" class="btn btn-warning maj">Submit Music</a>
						</div>
					</div>
				</div>

				<div class="item labels">
					<div class="picture">
						<a class="image" href="press_single.php" title="More details"><img src="img/lone-ranger.jpg" alt=""></a>
						<div class="description">
							<h2 class="maj">The Lone Ranger</h2>
							<p class="maj">(Jamaïca)</p>
							<p>
							Featured in:
							<ul>
								<li>4 physical releases</li>
								<li>6 digital releases</li>
							</ul></p>
							<p>Lone ranger (born Anthony Alphanso Waldron) Lone ranger (born Anthony...
							</p>
							<a href="#" class="btn btn-warning maj">More info</a>
						</div>
					</div>
				</div>



			</div>
			<!-- end: Wall -->				
					
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->	
	
<?php require_once "footer.php";?>

    </div> <!-- /container -->

  <?php require_once "all_js_footer.php";?>

  </body>
</html>

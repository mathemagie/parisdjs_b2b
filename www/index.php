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

       <div class="row-fluid">
           <table class="table table-bordered table-hover">
               <thead>
                  <tr>
                    <th>Logo </th>
                    <th>Description</th>
                          <th>Artist name</th>
                    <th>label</th>
                    <th>Release</th>
                    <th>unit price</th>
                    <th>stock</th>
                    <?php if (is_media()) {?>
                      <th>Order</th>
                    <?php } ?>

                  </tr>
                </thead>
                <tr class="success">
               
                  <td>coucou</td>
                  <td>parisdjs</td>
                  <td>TIMEC</td>
                  <td>release</td>
                  <td>12 10 1878</td>
                  <td>10</td>
                  <td>20</td>
                </tr>

                <tr >
                  <td>coucou</td>
                  <td>PROJECT NAME</td>
                  <td>TIMEC</td>
                  <td>release</td>
                  <td>release</td>
                  <td>10</td>
                  <td>20</td>
                </tr>

                 <tr >
                  <td>coucou</td>
                  <td>parisdjs</td>
                  <td>TIMEC</td>
                  <td>release</td>
                  <td>release</td>
                  <td>10</td>
                  <td>20</td>
                </tr>

                 <tr >
                  <td>coucou</td>
                  <td>parisdjs</td>
                  <td>TIMEC</td>
                  <td>release</td>
                  <td>release</td>
                  <td>10</td>
                  <td>20</td>
                </tr>

                 <tr >
                  <td>coucou</td>
                  <td>parisdjs</td>
                  <td>TIMEC</td>
                  <td>release</td>
                  <td>release</td>
                  <td>10</td>
                  <td>20</td>
                </tr>

                 <tr >
                  <td>coucou</td>
                  <td>parisdjs</td>
                  <td>TIMEC</td>
                  <td>release</td>
                  <td>release</td>
                  <td>10</td>
                  <td>20</td>
                </tr>
            </table>
      </div>

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

      <hr>

      <footer>
        <p>&copy; ParisDjs 2013</p>
      </footer>

    </div> <!-- /container -->

  <?php require_once "all_js_footer.php";?>

  </body>
</html>

<?php require_once "config.php";?>
<?php require_once "header.php";?>
<body>
<?php require_once "menu.php";?>
  <div class="container">
        <form class="well span8">
      <div class="row">
        <div class="span3">
          <label>First Name</label>
          <input type="text" class="span3" placeholder="Your First Name">
          <label>Last Name</label>
          <input type="text" class="span3" placeholder="Your Last Name">
          <label>Email Address</label>
          <input type="text" class="span3" placeholder="Your email address">
                <label>Subject</label>
          <select id="subject" name="subject" class="span3">
            <option value="na" selected="">Choose One:</option>
            <option value="service">General Customer Service</option>
            <option value="suggestions">Suggestions</option>
            <option value="product">Product Support</option>
          </select>
        </div>
        <div class="span5">
          <label>Message</label>
          <textarea name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
        </div>
      
        <button type="submit" class="btn btn-primary pull-right">Send</button>
      </div>
    </form>

  </div> <!-- /container -->

<?php require_once "all_js_footer.php";?>
</body>
</html>
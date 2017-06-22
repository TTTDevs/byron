<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>| Byron |</title>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
  <div class="container">
    <div class="page-top row">
      <div class="title col-sm-4">
        <h1><a href="/">Main page</a></h1>
      </div> <!-- .header -->

    </div>

    <div class="row">
      <hr>
      <div class="menu-bar col-sm-3">
        <input type="checkbox" id="dropdown">
        <label for="dropdown">Entries (<?php echo $menu_count; ?>)</label>
        <ul>
          <?php echo implode("\n", $menu); ?>
        </ul>
      </div> <!-- .menu-bar -->

      <div class="content col-sm-9">
        <?php  echo $content; ?>
      </div>
      <hr>
    </div> <!-- .row -->
  </div> <!-- .container -->
</body>

</html>
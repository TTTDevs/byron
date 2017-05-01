<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>| Byron |</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
  <div id="wrap-content">
    <div class="header">
      <a href="/">Main page</a>
    </div>
    
    <hr>
    
    <div id="content">
      <?php  echo $content; ?>
    </div>

    <hr>

    <div id="menu-bar">
      <p>Entries</p>
      <nav>
        <?php echo implode("\n", $menu); ?>
      </nav>
    </div>

  </div>
</body>

</html>
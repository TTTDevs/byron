<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>| Byron |</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
  <div id="wrap-content">
    
    <div id="content">
      <?php  echo $content; ?>
    </div>

    <div id="menu-bar">
      <nav>
      <a href="/">Página principal</a><br>
        <?php echo implode("\n", $menu); ?>
      </nav>
    </div>

  </div>
</body>

</html>
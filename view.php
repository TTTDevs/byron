<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>| Byron |</title>
  <!-- <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
  <div class="container">
    <div class="page-top">
      <div class="title">
        <h1><a href="/" data-href>Main page</a></h1>
      </div> <!-- .header -->
    </div> <!-- .page-top -->

    <div class="middle-container">
      <div class="menu-bar">
        <input type="checkbox" id="dropdown">
        <label for="dropdown">Entries (<?php echo $menu_count; ?>)</label>
        <ul>
          <?php echo implode("\n", $menu); ?>
        </ul>
      </div> <!-- .menu-bar -->

      <div class="content"></div>
    </div> <!-- .row -->
  </div> <!-- .container -->

  <script>
    function loadEntry () {
      event.preventDefault();
      
      let href = event.target.href;
      let doc = document.querySelector(".content");

      fetch(href)
      .then(function (res) {
        return res.text();
      }).then(function (text) {
        console.log(text);
        doc.innerHTML = text;
      });
    }
  </script>
</body>

</html>
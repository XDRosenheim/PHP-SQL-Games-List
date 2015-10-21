<head>
  <!-- Latest compiled and minified CSS -->
  <?php
  if ( session_id() == null){
    $_theme = "cyborg";
  }
  else {
    $_theme = session_name();
  }
  $documentRoot = "/xdrosenheim.github.io/";
  ?>
  <link rel="stylesheet" href="<?php print $documentRoot?>bootstrap/css/<?php print $_theme?>.min.css">
  <link rel="stylesheet" href="<?php print $documentRoot?>css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php print $documentRoot?>css/style.css">
  <script src="<?php print $documentRoot?>js/jquery-2.1.4.min.js"></script>
  <script src="<?php print $documentRoot?>bootstrap/js/bootstrap.min.js"></script>
</head>

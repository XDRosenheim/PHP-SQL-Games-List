<head>
  <!-- Latest compiled and minified CSS -->
  <?php
  if ( session_id() == null){
    $_theme = "bootstrap";
  }
  else {
    $_theme = session_name();
  }
  ?>
  <link rel="stylesheet" href="bootstrap/css/<?php print $_theme?>.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="/js/jquery-2.1.4.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>

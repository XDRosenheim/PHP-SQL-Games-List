<?php
  // "NAME", STEAM ID, Workshop?, official wiki?, "wiki-link"
  $gamesList = [
    array("Rust", 252490, true, false, "http://rust.wikia.com/wiki/Rust_Wiki"),
    array("Terraria", 105600, false, true, "http://terraria.gamepedia.com/Terraria_Wiki"),
    array("Warframe", 230410, false, false, "http://warframe.wikia.com/wiki/WARFRAME_Wiki")
  ];

  $gamesListLength = count($gamesList);
?>

<!DOCTYPE html>
<html>
  <?php
    include("headerItems.php");
  ?>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Latest compiled and minified JavaScript -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  <ul class="nav navbar-nav">
    <!-- Rust -->
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown">Rust <i class="fa fa-arrow-down"></i></a>
      <ul class="dropdown-menu" role="menu">
        <li class="dropdown-header">Fanmade wiki</li>
        <li><a href="http://rust.wikia.com/wiki/Rust_Wiki">Wikia</a></li>
        <li class="divider"></li>
        <li class="dropdown-header">Steam links</li>
        <li><a href="http://store.steampowered.com/app/252490">Store</a></li>
        <li><a href="http://steamcommunity.com/app/252490">Community</a></li>
        <li><a href="http://steamcommunity.com/app/252490/screenshots">Screenshots</a></li>
        <li><a href="https://steamcommunity.com/workshop/browse?appid=252490">Workshop</a></li>
        <li><a href="http://steamcommunity.com/app/252490/guides">Guides</a></li>
        <li><a href="http://steamcommunity.com/app/252490/allnews">News</a></li>
        <li><a href="http://steamcommunity.com/app/252490/discussions">Discussions</a></li>
      </ul>
    </li>
    <?php
      for ( $i = 0; $i < $gamesListLength; $i++ ) {
        if ( $gamesList[$i][3] ) {
          $wikiString = "Official wiki";
        } else {
          $wikiString = "Fanmade wiki";
        };
        print "<li class=\"dropdown\">";
        print "<a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Rust <i class=\"fa fa-arrow-down\"></i></a>";
        print "<ul class=\"dropdown-menu\" role=\"menu\">";
        print "<li class=\"dropdown-header\">" . $wikiString . "</li>";
        print "<li><a href=\"" . $gamesList[$i][4] . "\">Wiki</a></li>";
        print "<li class=\"divider\"></li>";
        print "<li class=\"dropdown-header\">Steam links</li>";
        print "<li><a href=\"http://store.steampowered.com/app/" . $gamesList[$i][1] . "\">Store</a></li>";
        print "<li><a href=\"http://steamcommunity.com/app/" . $gamesList[$i][1] . "\">Community</a></li>";
        print "<li><a href=\"http://steamcommunity.com/app/" . $gamesList[$i][1] . "/screenshots\">Screenshots</a></li>";
        if ( $gamesList[$i][2]) {
          print "<li><a href=\"https://steamcommunity.com/workshop/browse?appid=" . $gamesList[$i][1] . "\">Workshop</a></li>";
        } else {
          print "<li class=\"disabled\"><a>Workshop</a></li>";
        }
        print "<li><a href=\"http://steamcommunity.com/app/" . $gamesList[$i][1] . "/guides\">Guides</a></li>";
        print "<li><a href=\"http://steamcommunity.com/app/" . $gamesList[$i][1] . "/allnews\">News</a></li>";
        print "<li><a href=\"http://steamcommunity.com/app/" . $gamesList[$i][1] . "/discussions\">Discussions</a></li>";
        print "</ul></li>";
      }
    ?>
  </ul>
</body>

</html>
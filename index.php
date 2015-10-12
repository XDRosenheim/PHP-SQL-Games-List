<?php
  // "NAME", STEAM ID, Workshop?, official wiki?, "wiki-link"
  $gamesList = [
    array("Rust", 252490, true, false, "http://rust.wikia.com/wiki/Rust_Wiki"),
    array("Terraria", 105600, false, true, "http://terraria.gamepedia.com/Terraria_Wiki"),
    array("Warframe", 230410, false, false, "http://warframe.wikia.com/wiki/WARFRAME_Wiki"),
    array("7 Days to Die", 251570, false, true, "http://7daystodie.gamepedia.com/7_Days_to_Die_Wiki"),
    array("Space Engineers", 244850, true, true, "http://www.spaceengineerswiki.com/Main_Page"),
    array("Cities: Skylines", 255710, true, true, "http://www.skylineswiki.com/Cities:_Skylines_Wiki"),
    array("ARK: Survival Evolved", 346110, true, true, "http://ark.gamepedia.com/ARK:_Survival_Evolved_Wiki")
  ];

  $gamesListLength = count($gamesList);
?>

<!DOCTYPE html>
<html>
<head>
  <?php
    include_once("headerItems.php");
  ?>
</head>

<body>

    <?php
      for ( $i = 0; $i < $gamesListLength; $i++ ) {
        if ( $gamesList[$i][3] ) {
          $wikiString = "Official wiki";
        } else {
          $wikiString = "Fanmade wiki";
        };
        print "<button type=\"button\" class=\"btn btn-default\">";
        print "<li class=\"dropdown\">";
        print "<a class=\"dropdown-toggle\" data-toggle=\"dropdown\">" . $gamesList[$i][0] . "<i class=\"fa fa-arrow-down\"></i></a>";
        print "<ul class=\"dropdown-menu\" role=\"menu\">";
        print "<li class=\"dropdown-header\">" . $wikiString . "</li>";
        print "<li><a href=\"" . $gamesList[$i][4] . "\">Wiki</a></li>";
        print "<li class=\"divider\"></li><li class=\"dropdown-header\">Steam links</li>";
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
  </button>
</body>

</html>
<?php
  // "NAME", STEAM ID, Workshop?, official wiki?, "wiki-link", sub-reddit (If non, leave blank)

  $gamesList = [
    array("Rust", 252490, true, false, "https://rust.wikia.com/wiki/Rust_Wiki", "playrust"),
    array("Terraria", 105600, false, true, "https://terraria.gamepedia.com/Terraria_Wiki", "Terraria"),
    array("Warframe", 230410, false, false, "https://warframe.wikia.com/wiki/WARFRAME_Wiki", "Warframe"),
    array("7 Days to Die", 251570, false, true, "https://7daystodie.gamepedia.com/7_Days_to_Die_Wiki", "7daystodie"),
    array("Space Engineers", 244850, true, true, "https://www.spaceengineerswiki.com/Main_Page", "spaceengineers"),
      array("Cities: Skylines", 255710, true, true, "http://www.skylineswiki.com/Cities:_Skylines_Wiki", "citiesskylines"),
    array("ARK: Survival Evolved", 346110, true, true, "https://ark.gamepedia.com/ARK:_Survival_Evolved_Wiki", "playark")
  ];
  sort($gamesList);
  $gamesListLength = count($gamesList);
?>

<!DOCTYPE html>
<html>
  <?php
    include_once("head/cyborg.php"); //Dark theme TODO: Download more theme.
  ?>
<body>
<div class="wrapper">
  <div class="jumbotron">
    <div class="container">
      <h1>Heads</h1>
      <p>Tails</p>
      <a href="https://github.com/XDRosenheim/xdrosenheim.github.io">As seen on Github! <i class="fa fa-lg fa-github"></i></a>
    </div>
  </div>
  <div class="container">
    <?php
    $newRow = true;
      for ( $i = 0; $i < $gamesListLength; $i++ ) {
        if( $newRow ) {
          print "<div class='row'>";
          $newRow = false;
        }
        if ( $gamesList[$i][3] ) {
          $wikiString = "Official wiki";
        } else {
          $wikiString = "Fanmade wiki";
        };
        print "<div class='col-md-3'>";
        print "<div class='btn-group btn-block'><button class='btn btn-default col-sm-11'>" . $gamesList[$i][0] . "</button>";
        print "<button class='btn btn-default col-sm-1 dropdown-toggle' data-toggle='dropdown'><span class='caret'></span></button>";
        print "<ul class='dropdown-menu btn-block' role='menu'>";
        print "<li class='dropdown-header'>" . $wikiString . "</li>";
        print "<li><a href='" . $gamesList[$i][4] . "'>Wiki</a></li>";
        print "<li class='divider'></li><li class='dropdown-header'>Steam links</li>";
        print "<li><a href='https://store.steampowered.com/app/" . $gamesList[$i][1] . "'>Store</a></li>";
        print "<li><a href='https://steamcommunity.com/app/" . $gamesList[$i][1] . "'>Community</a></li>";
        print "<li><a href='https://steamcommunity.com/app/" . $gamesList[$i][1] . "/screenshots'>Screenshots</a></li>";
        if ( $gamesList[$i][2]) {
          print "<li><a href='https://steamcommunity.com/workshop/browse?appid=" . $gamesList[$i][1] . "'>Workshop</a></li>";
        } else {
          print "<li class='disabled'><a>Workshop</a></li>";
        }
        print "<li><a href='https://steamcommunity.com/app" . $gamesList[$i][1] . "/guides'>Guides</a></li>";
        print "<li><a href='https://steamcommunity.com/app" . $gamesList[$i][1] . "/allnews'>News</a></li>";
        print "<li><a href='https://steamcommunity.com/app" . $gamesList[$i][1] . "/discussions'>Discussions</a></li>";
        print "<li class='divider'></li>";
        print "<li class='dropdown-header'>Reddits</li>";
        if ( $gamesList[$i][5] != "") {
          print "<li><a href='https://reddit.com/r/" . $gamesList[$i][5] . "/'>Subreddit</a></li>";
        } else {
          print "<li class='disabled'><a>Subreddit</a></li>";
        }
        print "</ul></div></div>";
        if( ($i+1) % 4 == 0 ) {
          print "</div>";
          $newRow = true;
        }
      }
    ?>
  </div>
</div>
</body>

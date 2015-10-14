<?php
  include("includeMe/gameslist.php");
  sort($gamesList);
  $gamesListLength = count($gamesList);

  //require_once("sql/databaseStrings.php");
  //$conn = new mysqli($servername, $username, $password, $databasename);
  $servername = "127.0.0.1";
  $username = "root";
  $password = "28998160";
  $dbname = "php_site";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM gamesList";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>
<!DOCTYPE html>
<html>
  <?php include_once("head/headTags.php"); // Get themes 'n' shit ?>
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

        print "<div class='col-md-3'>";
        print "<div class='btn-group btn-block'><button class='btn btn-default col-sm-11 dropdown-toggle' data-toggle='dropdown' >" . $gamesList[$i][0] . "<i class='fa fa-caret-down pull-right'></i></button>";
        //print "<button class='btn btn-default col-sm-1 ><span class='caret'></span></button>";
        print "<ul class='dropdown-menu btn-block' role='menu'>";


        if ( $gamesList[$i][3] == true ) {
          $wikiString = "Official wiki";
        }
        elseif ( $gamesList[$i][4] == "" ) {

        } else {
          $wikiString = "Fanmade wiki";
        };
        print "<li class='dropdown-header'>Wiki</li>";
        print "<li><a href='" . $gamesList[$i][4] . "'>" . $wikiString . "</a></li>";


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
<?php include_once("feet/footer.php"); ?>
</body>

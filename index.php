<?php
include_once("sql/databaseStrings.php");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, appName, steam_id, steam_workshop, wiki_link, sub_reddit, steam_market FROM gamesList ORDER BY appName ASC";
?>
<!DOCTYPE html>
<html>
    <?php include_once("head/headTags.php"); // Get themes 'n' shit ?>
<body>
<?php include_once("head/navbar.html") ?>
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
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if( $newRow ) {
                    print "<div class='row'>";
                    $newRow = false;
                }
                print "<div class='col-md-3'>";
                print "<div class='btn-group btn-block'><button class='btn btn-default col-sm-11 dropdown-toggle' data-toggle='dropdown'>" . $row["appName"] . "<i class='fa fa-caret-down pull-right'></i></button>";
                print "<ul class='dropdown-menu' role='menu'>";
                print "<li class='dropdown-header'>Wiki</li>";
                if ( $row["wiki_link"] != "" ) {
                    print "<li><a href='" . $row["wiki_link"] . "'>Wiki</a></li>";
                } else {
                    print "<li class='disabled'><a>No wiki found...</a></li>";
                };
                print "<li class='divider'></li><li class='dropdown-header'>Steam links</li>";
                print "<li><a href='https://store.steampowered.com/app/" . $row["steam_id"] . "'>Store</a></li>";
                print "<li><a href='https://steamcommunity.com/app/" . $row["steam_id"] . "'>Community</a></li>";
                print "<li><a href='https://steamcommunity.com/app/" . $row["steam_id"] . "/screenshots'>Screenshots</a></li>";
                if ( $row["steam_workshop"] ) {
                    print "<li><a href='https://steamcommunity.com/workshop/browse?appid=" . $row["steam_id"] . "'>Workshop</a></li>";
                } else {
                    print "<li class='disabled'><a>Workshop</a></li>";
                }
                print "<li><a href='https://steamcommunity.com/app/" . $row["steam_id"] . "/guides'>Guides</a></li>";
                print "<li><a href='https://steamcommunity.com/app/" . $row["steam_id"] . "/allnews'>News</a></li>";
                print "<li><a href='https://steamcommunity.com/app/" . $row["steam_id"] . "/discussions'>Discussions</a></li>";
                if ( $row["steam_market"] ) {
                    print "<li><a href='https://steamcommunity.com/market/search?appid=" . $row["steam_id"] . "'>Market</a></li>";
                } else {
                    print "<li class='disabled'><a>Market</a></li>";
                }

                print "<li class='divider'></li>";
                print "<li class='dropdown-header'>Reddits</li>";
                if ( $row["sub_reddit"] != "") {
                    print "<li><a href='https://reddit.com/r/" . $row["sub_reddit"] . "/'>Subreddit</a></li>";
                } else {
                    print "<li class='disabled'><a>Subreddit</a></li>";
                }
                print "</ul></div></div>";
                if( ($i % 4 == 0) && ($i > 4) ) {
                    print "</div>";
                    $newRow = true;
                }
                $i++;
            }
        } else {
            echo "SQL Error, 0 (zero) entries found!";
        }
        $conn->close();
        ?>
    </div>
</div>
<?php include_once("feet/footer.php"); ?>
</body>

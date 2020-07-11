<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    /*
    $dbh = pg_connect("host=localhost dbname=test user=postgres");

    if (!$dbh) {

        die("Error in connection: " . pg_last_error());

    }

    $sql = "SELECT * FROM Countries";

    $result = pg_query($dbh, $sql);

    if (!$result) {

        die("Error in SQL query: " . pg_last_error());

    }

    while ($row = pg_fetch_array($result)) {

        echo "Country code: " . $row[0] . "<br />";

        echo "Country name: " . $row[1] . "<p />";

    }

    pg_free_result($result);

    pg_close($dbh);*/

    foreach ($_POST as $value) {
        echo $value;
    }
}
?>
<!-- Con una librería llamada PDO PostgreSQL -->
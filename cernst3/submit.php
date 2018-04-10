<?php
  // 1. Create a database connection
  $dbhost = "66.147.242.186";
  $dbuser = "urcscon3_cernst3";
  $dbpass = "xfvJg+RHr2z.";
  $dbname = "urcscon3_cernst3";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Data coming in from the form on submit proposal page of website
  $insertName = $_POST["name"];
  $insertEmail = $_POST["email"];
  // $insertProposal = $_POST["proposal"];
  
  // You really should escape all strings
  //$insertData = mysqli_real_escape_string($connection, $insertData);
  
  // 2. Perform database query
  $query  = "INSERT INTO Product VALUES ('$insertName', '$insertEmail', '$insertProposal')";
  $result = mysqli_query($connection, $query);

?>


<?php
$mysqli = new mysqli('host', 'username', 'password', 'database');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';
$mysqli->close();
?>


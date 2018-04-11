<?php
  // 1. Create a database connection
  $dbhost = "66.147.242.186";
  $dbuser = "urcscon3_cernst4";
  $dbpass = "coffee1N/!";
  $dbname = "urcscon3_cernst3";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Data coming in from the form on submit proposal page of website
  $insertName = $_POST['name'];
  $insertEmail = $_POST['email'];

  // SANITIZE DATA

  // $insertProposal = $_POST["proposal"];
  
  // You really should escape all strings
  //$insertData = mysqli_real_escape_string($connection, $insertData);
  // 2. Perform database query
  // $query  = "INSERT INTO urcscon3_cernst3 VALUES ('$insertName', '$insertEmail')";
  // $query = "INSERT INTO 'Newsletter' ('name', 'email') VALUES ('$insertName', '$insertEmail')";
  // $query = "SELECT * From Newsletter";


  $query = "INSERT INTO Newsletter (name, email) VALUES ('{$insertName}', '{$insertEmail}')";
  $result = mysqli_query($connection, $query);

  if ($result) {
    echo "sucess";
  }
  else{
    echo "fail";
  }

?>


<?php
mysqli_close($connection)

?>




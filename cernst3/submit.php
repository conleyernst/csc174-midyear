<?php
  // 1. Create a database connection
  $dbhost = "66.147.242.186";
  $dbuser = "urcscon3_cernst4";
  $dbpass = "coffee1N/!";
  $dbname = "urcscon3_cernst3";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Data coming in from the form on submit proposal page of website AND sanitize data
  $insertName = Trim(stripslashes($_POST['name']));
  $insertEmail = Trim(stripslashes($_POST['email']));

  // 2. Perform database query
  $query = "INSERT INTO Newsletter (name, email) VALUES ('{$insertName}', '{$insertEmail}')";
  $result = mysqli_query($connection, $query);

  // if ($result) {
  //   echo "sucess";
  // }
  // else{
  //   echo "fail";
  //   echo $insertName;
  //   echo $insertEmail;
  // }

?>


<?php
mysqli_close($connection)

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php include "includes/css_general.php"; ?>


    <title>Midyear Exam</title>
  </head>
  <body>

    <?php include "includes/nav.php"; ?>

    <div class="container">
      <div class="card bg-dark text-white text-center">
        <img class="card-img" src="imgs/mix.jpg" alt="Card image">
        <div class="card-img-overlay">
          <h1 class="card-title" style="color: white;">Thanks for Signing Up for our Newsletter, <?php echo $insertName?>!</h1>
          <a href="index.php" class="btn btn-primary">Go Back to Home Page</a>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete City</title>
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <?php require('reusables/nav.php'); ?>
      </div>
    </div>
  </div>

  <?php 
    require('reusables/connect.php');
    $cityID = $_GET['cityID']; // The parameter should be 'cityID' instead of 'productCode'
    
    // Update the query to fetch the city by ID
    $query = "SELECT * FROM city WHERE ID = '$cityID'";
    $city = mysqli_query($connect, $query);

    if ($city) {
      $result = $city->fetch_assoc();
  ?>
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4">Delete City: <?php echo $result['Name']; ?></h1>
          <p class="lead">Are you sure you want to delete this city?</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <form method="POST" action="inc/deleteScript.php">
            <!-- Hidden field for city ID -->
            <input type="hidden" name="cityID" value="<?php echo $cityID; ?>">
            <button type="submit" class="btn btn-danger" name="deleteCity">Delete</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>
    </div>
    <?php
    } else {
      echo '<p>City not found.</p>';
    }
  ?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update City</title>
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
    $query = "SELECT * FROM city WHERE ID = '$cityID'";
    $city = mysqli_query($connect, $query);

    if ($city) {
      $result = $city->fetch_assoc();
  ?>
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="display-4">Update City: <?php echo $result['Name']; ?></h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-5">
        <form method="POST" action="inc/updateScript.php">
          <div class="mb-3">
            <label for="name" class="form-label">City Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $result['Name']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="countryCode" class="form-label">Country Code</label>
            <input type="text" class="form-control" id="countryCode" name="countryCode" maxlength="3" value="<?php echo $result['CountryCode']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="district" class="form-label">District</label>
            <input type="text" class="form-control" id="district" name="district" value="<?php echo $result['District']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="info" class="form-label">Additional Information (JSON Format)</label>
            <textarea class="form-control" id="info" name="info" rows="4" placeholder='{"key": "value"}'><?php echo $result['Info']; ?></textarea>
          </div>

          <button type="submit" class="btn btn-primary" name="updateCity">Submit</button>
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

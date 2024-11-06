<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add City</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="my-4">Add New City</h1>
    <form method="POST" action="inc/addScript.php">
        <div class="mb-3">
            <label for="name" class="form-label">City Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="countryCode" class="form-label">Country Code</label>
            <input type="text" class="form-control" id="countryCode" name="countryCode" maxlength="3" required>
        </div>
        <div class="mb-3">
            <label for="district" class="form-label">District</label>
            <input type="text" class="form-control" id="district" name="district" required>
        </div>
        <div class="mb-3">
            <label for="info" class="form-label">Additional Information (JSON Format)</label>
            <textarea class="form-control" id="info" name="info" rows="4" placeholder='{"key": "value"}'></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="addCity">Add City</button>
    </form>
</div>
</body>
</html>

<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}

// Get the list of users
$users = getUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Cards</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <div class="row">
        <?php if (!empty($users)) : ?>
            <?php foreach ($users as $user) : ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($user['name']); ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($user['email']); ?></h6>
                            <p class="card-text">
                                <strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?><br>
                                <strong>Phone:</strong> <?php echo htmlspecialchars($user['phone']); ?><br>
                                <strong>Website:</strong> <a href="http://<?php echo htmlspecialchars($user['website']); ?>" target="_blank"><?php echo htmlspecialchars($user['website']); ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No users found.</p>
        <?php endif; ?>
    </div>
</div>

<!-- Bootstrap JS for interactivity -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

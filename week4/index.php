<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers()
{
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}

// Get the list of users
$users = getUsers();
?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <h1>Users List</h1>
    <?php
    // Loop through the users and display each one in a simple card
    foreach ($users as $user) {
        ?>
        <div class="card" style="width: 18rem;">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="<?= $user['name']; ?>">
        <div class="card-body">
                <h5 class="card-title"><?= $user['name']; ?></h5>
                <p class="card-text">
                    <strong>Email:</strong> <?= $user['email']; ?><br>
                    <strong>Phone:</strong> <?= $user['phone']; ?><br>
                    <strong>Company:</strong> <?= $user['company']['name']; ?>
                </p>
            </div>
        </div>
        <?php
    }
    ?>
</body>

</html>
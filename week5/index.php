<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$connect = mysqli_connect(
'localhost',
'root',
'root',
'http5225');
if(!$connect)
{
    echo 'error code:' . mysqli_connect_errno();
    echo 'error message:' . mysqli_connect_error();
    exit;
}
$query = 'SELECT `Name`, `Hex` FROM colors';
$results = mysqli_query($connect, $query);
if(!$results){
    echo 'Error Message: ' . mysqli_error($connect);
}else{
    echo 'the query found: ' . mysqli_num_rows($results);
}

?>

</body>
</html>
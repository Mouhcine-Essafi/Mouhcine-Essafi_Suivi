<?php

include("config.php");

if (isset ($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];

    $insert = $conn->prepare('INSERT INTO users (username , email) VALUES (?,?) ');
    $insert->bind_param('ss',$username , $email);
    if ($insert->execute()){
        echo 'success';
    }else{
        echo'failed';

        }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>

<body>
    <h2>Create User</h2>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <button type="submit" name="submit">Add User</button>
    </form>
</body>

</html>
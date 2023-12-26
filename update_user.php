<?php
include("config.php");

$id = $_GET['id'];

    $select = mysqli_query($conn,"SELECT * FROM users WHERE id = $id") or die(mysqli_error($conn));

    $fetch = mysqli_fetch_assoc($select);

    if (isset($_POST["submit"])) {

        $username = $_POST['username'];
        $email = $_POST['email'];
        
        mysqli_query($conn,"UPDATE `users` SET username = '$username' , email = '$email' WHERE id = '$id' ");

    }


?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form method="post" action="">
    <table border="1">

        <tr>
            <th>User name</th>
            <th>Email</th>
        </tr>
        <tr>
            <th><input type="text" name="username" placeholder="<?php  echo $fetch['username']  ?>" ></th>
            <th><input type="text" name="email" placeholder="<?php  echo $fetch['email']  ?>"></th>
        </tr>
    </table>
    <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>
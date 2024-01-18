<?php
include("config.php");

$users = [];

$select = mysqli_query($conn, "SELECT * FROM users");

if ($select->num_rows > 0) {

    while ($fetch = mysqli_fetch_assoc($select)) {
        $users[] = $fetch;
    }
}
if (isset($_GET["del"])) {
    $id = $_GET["del"];

    mysqli_query($conn,"DELETE FROM users WHERE id = $id");

}

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <title>Document</title>
</head>

<body>
    <table border="1">
        <?php if ($users) : ?>
            <tr>
                <th>ID</th>
                <th>userName</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            <?php foreach ($users as $user) :  ?>
                <tr>
                    <th><?php echo $user['id'] ?> </th>
                    <th><?php echo $user['username'] ?></th>
                    <th><?php echo $user['email']  ?></th>
                    <th> <a href="update_user.php?id=<?php echo $user['id']; ?>" class="btn">edit</a> |||
                     <a href="?del=<?php echo $user['id'];?>" class="btn">delete</a></th>
                </tr>
            <?php endforeach  ?>
            <button ><a href="create_user.php">add user</a></button>

    </table>
<?php else : ?>
    <?php echo 'no users found' ?>
<?php endif ?>
</body>

</html> 
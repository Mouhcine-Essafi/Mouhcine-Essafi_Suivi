<?php
include("config.php");

$select = mysqli_query($conn, "SELECT * FROM users");
$users = [];
if ($select->num_rows > 0) {

    while ($fetch = mysqli_fetch_assoc($select)) {
        $users[] = $fetch;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
</head>

<body>
    <h2>View Users</h2>
    <?php if ($users) ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
        </tr>

        //content here

    </table>
</body>

</html>
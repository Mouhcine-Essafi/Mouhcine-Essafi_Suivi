<?php
include("config.php");

$users = [];

$select = mysqli_query($conn ,"SELECT * FROM users");


if ($select->num_rows > 0){

    while($fetch = mysqli_fetch_assoc($select)){
        $users [] = $fetch ; 
    };

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
    

<?php  if($users) : ?>
    <table border ="1">
    <tr>
        <th>ID</th>
        <th>USER NAME</th>
        <th>EMAIL</th>
    </tr>
    <?php  foreach($users as $user): ?>
    <tr>
        <th><?php  echo $user['id']  ?></th>
        <th><?php  echo $user['username']  ?></th>
        <th><?php  echo $user['email']  ?></th>
    </tr>
    <?php   endforeach  ?>    
</table>
    
<?php  else :    ?>
    <?php   echo 'No users found'; ?>
<?php endif ;?>

</body>
</html>
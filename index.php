<?php

if(file_exists(dirname (__FILE__). "./config.php")){
    require_once(dirname (__FILE__) ."./config.php");
}

if($conn==true){
    echo "yes";
}else{
    echo "NO";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    $emailaddress = isset($_POST['email']) ? $_POST['email'] : NULL;
    $password = isset($_POST['password']) ? $_POST['password'] : NULL;


    if(isset($_POST['submit']))
    {	 
        $emailaddress = $_POST['email'];
        $password = $_POST['password'];
         
       
         $sql = "INSERT INTO student (Email,Pass)
         VALUES ('$emailaddress','$password')";
         if (mysqli_query($conn, $sql)) {
            echo "New record created successfully !";
         } else {
            echo "Error: " . $sql . "
    " . mysqli_error($conn);
         }
         mysqli_close($conn);
    }
    
    
    
    ?>


    <form action="" method="POST">
        <input type="email" name="email"><br><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit">



    </form>




</body>
</html>
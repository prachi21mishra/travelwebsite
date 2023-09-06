<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/homestyle.css">
    
</head>
<body>



<?php
include 'database.php';
if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $location=$_POST['location'];
    $guests=$_POST['guests'];
    $arrival=$_POST['arrival'];
    $leaving=$_POST['leaving'];

    $sql="insert into book_form (name,email,phone,address,location,guests,arrival,leaving) values('$name','$email','$phone','$address','$location','$guests','$arrival','$leaving')";
    if(mysqli_query($con,$sql))
    {

        echo "<script>alert('THANK YOU DETAILS SUBMITTED SUCCESSFULLY ')</script>";
        echo "<div class='msg'> <p>soon our agent contact you<p></div>";
        echo "<a href='hpgfinal.php'><button class='back'>home page</button></a>";
    }
    else
    {
        echo"error:".mysqli_error($con);
    }
    mysqli_close($con);

}
?>
</body>
</html>
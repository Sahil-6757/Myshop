<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "lucky_shop";

$con = mysqli_connect($server, $username, $password, $database);
if ($con) {
    echo ("connection successfull");
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $city = $_POST['city'];
        $mobile = $_POST['mobile'];
        $quantity = $_POST['quantity'];

        $query = "INSERT INTO `order_table`(`Order_name`, `Order_city`, `Order_mobile`, `Order_quantity`)
         VALUES ('$name','$city','$mobile','$quantity')";
       if(empty($_POST['name'])){
        echo("Enter Name");
       }else if(empty($_POST['city'])){
        echo('Enter City');
       }else if(empty($_POST['mobile'])){
        echo('Enter Mobile');
       }
       else if(empty($_POST['quantity'])){
        echo('Enter Quantity');
        
       }
       else{
        if (mysqli_query($con, $query)) {
            echo("inserted successfuly");
            header("Location:action.php");
            exit;
        } else {
            echo ('<br>error while inserting data to the database'. mysqli_connect_error($query));
        }
    }
}
    
    
} else {
    echo ("Failed to establish connection");
}

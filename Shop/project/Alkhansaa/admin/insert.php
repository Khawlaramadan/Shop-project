<?php

include('config.php');

if(isset($_POST['upload'])){
    $NAME  = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $PROCESSOR = $_FILES['processor'];
    $RAM = $_FILES['RAM'];
    $SYSTEM = $_FILES['system'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'. $image_name);
    $image_up = "images/".$image_name;
    $insert = "INSERT INTO  products (name, price, image, processor, RAM, system) VALUES ('$NAME','$PRICE','$image_up','$PROCESSOR','$RAM','$SYSTEM')";
    mysqli_query($con, $insert);
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope online | اضافة منتجات</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2> Online Shope </h2>
                <img src="logo.jpg" alt="logo" width="300px">
                <input type="text" name='name'><br>
                <input type="text" name='price'>
                <br>
                <br><input type="text" name='processor'>
                <br>
                <input type="text" name='RAM'>
                <br>

                <input type="text" name='system'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> chocise imag to products</label>
                <button name='upload'> Upload Products</button>
                <br><br>
                <a href="products.php"> Show All products</a>
            </form>
        </div>
       
    </center>
</body>
</html>
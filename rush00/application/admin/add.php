<?php

    include("../../install.php");

    if (isset($_POST['add'])) {
        if ($_POST['add'] == "ADD") {
            $name = mysqli_real_escape_string($link, $_POST['name']);
            $category = mysqli_real_escape_string($link, $_POST['category']);
            $subcategory = mysqli_real_escape_string($link, $_POST['subcategory']);
            $description = mysqli_real_escape_string($link, $_POST['description']);
            $price = (float)mysqli_real_escape_string($link, $_POST['price']);
            $img = mysqli_real_escape_string($link, $_POST['img']);

            $queryInsert = mysqli_query($link, "INSERT INTO `items` (`name`, `category`, subcategory, description, price, img) VALUES ('$name', '$category', '$subcategory', '$description', '$price', '$img')");

        }
    }
?>

<form method="post" action="">
    <input type="text" name="name" value="" placeholder="name" /><br>
    <input type="text" name="category" value="" placeholder="category" /><br>
    <input type="text" name="subcategory" value="" placeholder="subcategory" /><br>
    <input type="text" name="description" value="" placeholder="description" /><br>
    <input type="text" name="price" value="" placeholder="price" /><br>
    <input type="text" name="img" value="" placeholder="img" /><br>
    <input type="submit" name="add" value="ADD" />
</form>
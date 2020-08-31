<?php
    include("../../install.php");
    function refresh($url = NULL) {
        if(empty($url)) {
            $url = $_SERVER['REQUEST_URI'];
        }
        header("Location: ".$url);
        exit();
    }

    if ($_GET['page'] == "all") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items`");
    }
    if ($_GET['page'] == "leftbank") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE `category` = 'Left Bank'");
    }
    if ($_GET['page'] == "rightbank") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE `category`='Right Bank'");
    }
    if ($_GET['page'] == "spain") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE `category`='spain'");
    }
    if ($_GET['page'] == "burgundy") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE `category`='burgundy'");
    }
    if ($_GET['page'] == "pomerol") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE subcategory='pomerol'");
    }
    if ($_GET['page'] == "stemilion") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE subcategory='St Emilion'");
    }
    if ($_GET['page'] == "medoc") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE subcategory='Medoc'");
    }
    if ($_GET['page'] == "rioja") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE subcategory='rioja'");
    }
    if ($_GET['page'] == "ribera") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE subcategory='ribera'");
    }

    echo "<div class ='container'>";
    echo "<div class='row'>";
    echo "<div class='col-md-4>";
    echo "<div class='thumbnail'>";
    $i = 0;
    foreach ($resQuery as $elem) {
            // echo "<tr>";
            echo "<h3 class='name'>".$elem['name']."</h3>";
            echo "<img class='img-responsive' src='".$elem['img']."'>";
            echo "<p>".$elem['description']."</p>";
            echo "<p class='price'>".$elem['price']." €</p>";
            echo "<a><form method='post'><input type='hidden' name='hidden' value='$i'><input type='submit' name='submit' value='Add to Basket'></form></a>";
            // echo "</tr>";
            $i++;
        }
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    if (isset($_POST['submit'])) {
        if ($_POST['submit'] == "Add to Basket") {
            $i = (int)$_POST['hidden'];
            $find = 0;

            if (!$_SESSION['loggued_on_user']) {
                $login = $_SERVER['REMOTE_ADDR'];
                if (strstr($login, "::")) {
                    $login = trim(str_ireplace("::", " ", $login));
                }
            } else {
                $login = $_SESSION['loggued_on_user'];
            }

            $addr = $_SERVER['REMOTE_ADDR'];
            if (strstr($addr, "::")) {
                $addr = str_ireplace("::", " ", $login);
                $addr = trim($addr);
            }
            $ordered = 0;

            foreach ($resQuery as $elem) {
                if ($find == $i) {
                    $name = $elem['name'];
                    $price = $elem['price'];
                    $query = mysqli_query($link, "INSERT INTO `order` (login, `name`, price, ordered, addr) VALUES ('$login', '$name', '$price', '$ordered', '$addr')");
                    break ;
                }
                $find++;
            }
            refresh();
        }
    }
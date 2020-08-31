<?php

    include("../../install.php");

    if (isset($_POST['submit'])) {
        if ($_POST['submit'] === "Sign In") {
            $login = mysqli_real_escape_string($link, $_POST['login']);
            $email = mysqli_real_escape_string($link, $_POST['email']);
            $passwd = hash('whirlpool', mysqli_real_escape_string($link, $_POST['passwd']));

            $logQuery = mysqli_query($link, "SELECT * FROM `users`");
            $flag = 1;
            while ($row = mysqli_fetch_array($logQuery)) {
                if ($row['login'] == $login) {
                    echo "Login is in use";
                    $flag = 0;
                }
            }
            if ($flag === 1) {
                $Query = mysqli_query($link, "INSERT INTO `users` (login, email, password) VALUES ('$login', '$email', '$passwd')");
                $_SESSION['loggued_on_user'] = $login;
                header("location: index.php");
            }
        }
    }
?>
<div class="form">
    <form method="POST" action="">
        <fieldset>
            <legend>Create account</legend>
            <input type="text" name="login" placeholder="login" value="" />
            <input type="email" name="email" placeholder="e-mail" value="" />
            <input type="password" name="passwd" placeholder="password" value="" />
            <input type="password" name="conf_passwd" placeholder="confirm password" value="" />
        </fieldset>
        <input type="submit" name="submit" value="Sign In" />
        <a href="index.php?page=login">Back to Login</a>
    </form>
</div>


<?php
include_once "header.php";
?>
<div class="login-register-form" style="margin-top: 250px;">
    <h2>Login</h2>
    <form action="./auth/auth-process.php?login=" method="post">
        <div>
            <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'emptyinput') {
                            echo "<p class=\"login-register-alert\">Fill all fields!</p>";
                        } elseif ($_GET['error'] == 'wronglogin') {
                            echo "<p class=\"login-register-alert\">Incorrect Login Information</p>";
                        } else if ($_GET['error'] == 'pwdwrong') {
                            echo "<p class=\"login-register-alert\">Wrong Username or Passoword</p>";
                        }else if ($_GET['first'] == 'yes') {
                            echo "<p class=\"login-register-alert\">Login to Continue</p>";
                        }
                    }
                ?>
        </div>
        <div class="login-register-inputs">
            <input type="text" name="uid" id="uid" placeholder="Username">
            <br />&nbsp;
            <input type="password" name="pwd" id="pwd" placeholder="Password">
            <br />&nbsp;
        </div>
        <button type="submit" name="submit" class="login-signup-btn">Login</button>
        <br>
        <br>
        <a href="register.php" class="register-login-transfer">Don't Have an account</a>
    </form>
</div>
</body>

</html>
<?php
include_once("header.php");
?>
<div class="login-register-form" style="margin-top: 160px;">
    <div class="login-register-form-content">
        <h2>Sign Up</h2>
        <form action="./auth/auth-process.php?register=" method="post">
            <div>
                <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'emptyinput') {
                            echo "<p class=\"login-register-alert\">Fill all fields!</p>";
                        } elseif ($_GET['error'] == 'invalidusername') {
                            echo "<p class=\"login-register-alert\">Chose a proper Username(no special characters)</p>";
                        } else if ($_GET['error'] == 'invalidemail') {
                            echo "<p class=\"login-register-alert\">Choose a proper Email</p>";
                        } else if ($_GET['error'] == 'unmatchedpwd') {
                            echo '<p class="login-register-alert">Passwords don\'t match</p>';
                        } else if ($_GET['error'] == 'stmtfaild') {
                            echo "<p class=\"login-register-alert\">Something went wrong, try again</p>";
                        } else if ($_GET['error'] == 'usernametaken') {
                            echo "<p class=\"login-register-alert\">Username already in use</p>";
                        } else if ($_GET['error'] == 'none') {
                            header('location: login.php?first=yes');
                        }
                    }
                ?>
            </div><br>
            <div class="login-register-inputs">
                <input type="text" name="name" id="name" placeholder="Name">
                <br />&nbsp;
                <input type="text" name="uid" id="uid" placeholder="Username">
                <br />&nbsp;
                <input type="email" name="email" id="email" placeholder="Email">
                <br />&nbsp;
                <input type="password" name="pwd" id="pwd" placeholder="Password">
                <br />&nbsp;
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                <br />&nbsp;
            </div>
            <button type="submit" name="submit" class="login-signup-btn">Sign Up</button>
            <br>
            <br>
            <a href="login.php" class="register-login-transfer">Already a User?</a>
        </form>
    </div>
</div>
</body>

</html>
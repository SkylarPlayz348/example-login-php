<?php
if(isset($_POST['submit'])){
    if(isset($_GET['register'])){
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $uid = $_POST['uid'];
            $pwd = $_POST['pwd'];
            $pwdrepeat = $_POST['pwdrepeat'];
        
            require_once('../functions/dbh.php');
            require_once('../functions/functions.php');
        
            if (emptyInputSignup($name, $email, $uid, $pwd, $pwdrepeat) !== false) {
                header("location: ../register.php?error=emptyinput");
                exit();
            }
            if (invalidUsername($uid) !== false) {
                header("location: ../register.php?error=invalidusername");
                exit();
            }
            if (invalidEmail($email) !== false) {
                header("location: ../register.php?error=invalidemail");
                exit();
            }
            if (pwdMatch($pwd, $pwdrepeat) !== false) {
                header("location: ../register.php?error=unmatchedpwd");
                exit();
            }
            if (usernameExists($conn, $uid, $email) !== false) {
                header("location: ../register.php?error=usernametaken");
                exit();
            }
        
            creatUser($conn, $name, $email, $uid, $pwd);
        }
    } else {
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];
        require_once('../functions/dbh.php');
        require_once('../functions/functions.php');

        if (emptyInputLogin($uid, $pwd) !== false) {
            header("location: ../login.php?error=emptyinput");
            exit();
        }
        loginUser($conn, $uid, $pwd);
    }
} else {
    header('location: ../index.php');
}
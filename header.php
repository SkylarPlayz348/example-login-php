<link rel="stylesheet" href="./css/reset.css">
<?php
    session_start();
    if(isset($_SESSION['logged_in'])) {
      extract($_SESSION['userdata']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./public/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Red Angel Dash</title>
<style>
/* Style the navigation bar */
.navbar {
  background-color: #6c7293;
  overflow: auto;
}

/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

/* Navbar links on mouse-over */
.navbar a:hover {
  background-color: #6679e4;
  border-radius: 10px;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
</head>
<div class="navbar">
  <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <?php
      if(isset($_SESSION['logged_in'])){
        echo "<a style=\"float: right;\"href=\"./auth/logout.php\"><i class=\"fa fa-fw fa-right-to-bracket\"></i> Logout</a>";
        echo "<a style=\"float: right;\"href=\"profile.php\"><i class=\"fa fa-fw fa-user\"></i> ".$username."</a>";
      } else {
        echo "<a style=\"float: right;\"href=\"login.php\"><i class=\"fa fa-fw fa-user\"></i> Login</a>";
      }
    ?>
</div>
<body>
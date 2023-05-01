<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li a {
    font-family: Verdana;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #0000FF;
}

body {
  background-image: url('arcade-unsplash.jpg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}

</style>
</head>
<body>

<div class = "main">
    <ul>
        <li style="float:left"><a href="index.php">Home</a></li>
        <li style="float:left"></listyle><a href="registration.php">Register</a></li>
      </ul>
</div>
</body>
</html>

<div style="font-size:14pt; color: white">

<form action=<?php echo $_SERVER['PHP_SELF'] ?> method='post'>
<label for="user">Enter a username:</label><br>
<input type='text' name='user' id="user" pattern="[a-zA-Z0-9]*" title="Invalid characters used! No special characters!"><br>

<form action=<?php echo $_SERVER['PHP_SELF'] ?> method='post'>
<label for="image">Select an avatar:</label><br>
<input type="radio" id="blue_image" name="blue_avatar" value="blue">
<label for="image"><img src="avatar-blue.png" width="48" height="48"></label><br>
<input type="radio" src="avatar-orange.png" id="orange_image" name="orange_avatar" value="orange">
<label for="image"><img src="avatar-orange.png"width="48" height="48"></label><br>
<input type="radio" src="avatar-green.png" id="green_image" name="green_avatar" value="green">
<label for="image"><img src="avatar-green.png" width="48" height="48"></label><br>
<input type="submit" value="Submit">
</form>

<div>

<?php
if(isset($_POST['user']) && !empty($_POST['user'])){
    $cookie_value=$_POST['user'];
    setcookie('user',$cookie_value, time() + 86400, '/');
}
?>

<?php
if(isset($_POST['blue_avatar']) && !empty($_POST['blue_avatar'])){
    $cookie_value_colour =$_POST['blue_avatar'];
    setcookie('avatar', $cookie_value_colour, time() + 86400, '/');
}
?>

<?php
if(isset($_POST['orange_avatar']) && !empty($_POST['orange_avatar'])){
    $cookie_value_colour=$_POST['orange_avatar'];
    setcookie('avatar', $cookie_value_colour, time() + 86400, '/');
}
?>

<?php
if(isset($_POST['green_avatar']) && !empty($_POST['green_avatar'])){
    $cookie_value_colour=$_POST['green_avatar'];
    setcookie('avatar', $cookie_value_colour, time() + 86400, '/');
}
?>

<?php
if(isset($cookie_value)&& !empty($cookie_value)&& isset($cookie_value_colour)&& !empty($cookie_value_colour)){
    session_start();
    $_SESSION["user"] = $cookie_value;
    $_SESSION['avatar'] = $cookie_value_colour;
    echo "<a href =index.php> Click here to play</a>";
}
?>



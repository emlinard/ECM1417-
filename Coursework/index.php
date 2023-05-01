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
        <li style="float: right"><?php
                if(isset($_COOKIE["avatar"])&& $_COOKIE["avatar"] == "blue"){
                    echo '<img src="avatar-blue.png" width="48" height="48">';
                }
            ?>
        <?php
                if(isset($_COOKIE["avatar"])&& $_COOKIE["avatar"] == "orange"){
                    echo '<img src="avatar-orange.png" width="48" height="48">';
                }
            ?>
        <?php
                if (isset($_COOKIE["avatar"])&& $_COOKIE["avatar"] == "green"){
                    echo '<img src="avatar-green.png" width="48" height="48">';
                }
            ?></li>
        <li style="float:right"><?php
                if(isset($_COOKIE["user"])){
                    echo "<a href=pairs.php> Play pairs </a>";              
                }
            ?></li>
      </ul>
</div>
</body>

<body> 
    <center>  
        <h1>Welcome To Pairs!</h1>
    </center>
    <div style="font-size:14pt; color: white">
        <?php
            if(isset($_COOKIE["user"])){
                session_start();
                echo "Welcome to Pairs, ". $_COOKIE["user"] ."<br>";
                echo "<a href=pairs.php> Click here to play! </a>";              
            } else {
                echo "<a href=registration.php> You're not using a registered session? Register now </a>";
            }
        ?>
        
    </div>
</body>
</html>

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
        <li style="float:right"><a class="active" href="leaderboard.php">Leaderboard</a></li>
      </ul>
</div>
</body>
</html>

<hmtl>
    <style>
        table {
            max-width: 50%;
            margin-left: auto;
            margin-right: auto;
            background-color: gray;
            border-radius: 0.3em;
            box-shadow: 0 5px 5px gray;
            border-spacing: 2px;
            border:1px solid black;
            border-collapse: collapse;
        }

        th{
            text-align: left;
            background-color: blue;
        }
        
    </style>
<head>
    <title>Pairs Game</title>
</head>


<body>
    <header>
        <h1><div>Leaderboard</div></h1>
    </header>
    <main> 
        <table> 
            <tr>
                <th>Usernames</th>
                <th>Total game time</th>
                <th>Total game moves</th>
            </tr>
            <tr>
                <td>
                    <?php
                        $file = "leaderboard.csv";
                        $username = file_get_contents($file);

                        // Append a new person to the file
                        $username = $_COOKIE["user"];

                        // Write the contents back to the file
                        $data = $username;
                        file_put_contents($file, $data);

                        // Open your file in read mode
                        $input = fopen("leaderboard.csv", "r");

                        $text = file_get_contents("leaderboard.csv");
                        echo $text;
                    ?>
                </td>
                <td>
                    <?php
                        $file = "leaderboard.csv";
                        $totaltime = file_get_contents($file);

                        // Append a new person to the file
                        $totaltime =$_POST["totalgametime"];

                        // Write the contents back to the file
                        $data = $totaltime;
                        file_put_contents($file, $data);

                        // Open your file in read mode
                        $input = fopen("leaderboard.csv", "r");

                        $text = file_get_contents("leaderboard.csv");
                        echo $text;
                    ?>
                </td>
                <td>
                    <?php
                        $file = "leaderboard.csv";
                        $totalmoves = file_get_contents($file);

                        // Append a new person to the file
                        $totalmoves =$_POST["totalgamemove"];

                        // Write the contents back to the file
                        $data = $totalmoves;
                        file_put_contents($file, $data);

                        // Open your file in read mode
                        $input = fopen("leaderboard.csv", "r");

                        $text = file_get_contents("leaderboard.csv");
                        echo $text;
                    ?>
                </td>
            </tr>
        </div>

</body>
</html>

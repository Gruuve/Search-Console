<?php 

$user_id = $_GET['user_id'];
include("db.php");
$qw = "select * from users where id=$user_id";
$res = mysqli_query($con,$qw);
$row = mysqli_fetch_assoc($res);
$main_name = $row['name'];

?>


<!DOCTYPE html>
  <html>
    <head>
            <meta charset="utf-8">
            <link rel="icon" href="https://raw.githubusercontent.com/Gruuve/icon-source/master/icong.png">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="css/custom-index.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">


      <!--<meta name="viewport" content="width=device-width, initial-scale=1.0"/>-->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Dashboard</title>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1"><font class="temp">Gruuve </font><font class="subtag">Search Console : Dashboard</font></span>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <center><h1 class="display-4"><font class="temp2">Welcome, </font><font class="subtag2"><?php echo "$main_name"; ?></font></h1></center>
            </div>
        </div>

        <div class="container subtag3">
            <center>
                <div>Thanks for choosing Gruuve Search Console as your business buddy.<br>
                If you register any website, it will appear below.</div><br>
<!--cards start-->

<?php

$qwery = "select * from websites where user_id = $user_id";
$run = mysqli_query($con,$qwery);
if(mysqli_num_rows($run)>0){

    while($row1=mysqli_fetch_assoc($run)){

        
    echo "<div class=\"card\">
            <div class=\"card-header\">$row1[header]</div>
            <div class=\"card-body\">
            <blockquote class=\"blockquote mb-0\">
                <p>$row1[link] - $row1[content] </p>
                <footer class=\"blockquote-footer\">(<a href=\"remove.php?id=$row1[id]&user_id=$row1[user_id]\">Remove Website</a>)</footer>
            </blockquote>
            </div>
        </div><br>";

    
    }
}
else {
    echo "<br>No websites registered<br><br>";
}

?>


<!--cards end-->

<a href="new.php?user_id=<?php echo "$user_id"; ?>"><button type="button" class="btn btn-dark btn-lg">Add new website</button></a>

            </center>
        </div>

</body>
</html>
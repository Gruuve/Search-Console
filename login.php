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
      <title>Login : Gruuve Search Console</title>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1"><font class="temp">Gruuve </font><font class="subtag">Search</font></span>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <center><h1 class="display-4"><font class="temp2">Gruuve </font><font class="subtag2">Search Console</font></h1></center>
            </div>
        </div>

        <div class="container subtag3">
        
<!--form start-->            

            <form action="login.php" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="pass">
                </div>
                <br>
                <center><button type="submit" name="submit" class="btn btn-dark btn-lg">Log me in !!!</button></center>
              </form>

<!--form end-->

              <br>
              <center>
                  <div class="subtag3">
                      If you are new to Gruuve Search Console, please <a href="signup.php">Sign up</a> and get started.
                  </div>
              </center>
        </div>

       <br><br><br>
      
    </body>
    </html>


    <?php 
    error_reporting(0);

    if(isset($_POST['submit'])){
    
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if ($email=='' || $pass==''){
            echo "<script>alert('Email or Password field is empty')</script>";
        }
        else {
           //connections
           
           include("db.php");

            $insert_query = "select * from users where email='$email' and password='$pass'";
            $res=mysqli_query($con, $insert_query);

            if(mysqli_num_rows($res)>0){ 

                $row=mysqli_fetch_assoc($res);
                $id = $row[id];
                echo "<script>window.location.href = \"dashboard.php?user_id=$id\";</script>";


            }
            else {
                echo "<script>alert('Wrong Email or Password')</script>";
            }


        }
    
    }
    

    mysqli_close($con);

    ?>
    
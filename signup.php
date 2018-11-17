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
      <title>SignUp : Gruuve Search Console</title>
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
                <center>Ready to boost your Business? <br> Get noticed by pulling your website to the Search Engine.</center>
<!--form start-->
                <form method="POST" action="signup.php">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Enter Email address</label>
                          <input type="email" class="form-control" placeholder="Enter email" name="email">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                                <label for="exampleInputPassword1">Full Name</label>
                                <input type="text" class="form-control" placeholder="Full Name" name="name">
                              </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" placeholder="Password" name="pass1">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password" name="pass2">
                        </div>
                        <br>
                        <center><button type="submit" name="submit" class="btn btn-dark btn-lg">Create an Account</button></center>
                      </form>

<!--form end-->

<center><br>If you already created an Account, please <a href="login.php">Log In</a> here.</center>
          </div>      
        
    </body>
    </html>

    <?php 
    
    if(isset($_POST['submit'])){
    
      $email = $_POST['email'];
      $name = $_POST['name'];
      $pass1 = $_POST['pass1'];
      $pass2 = $_POST['pass2'];

      if ($pass1 !== $pass2){
        echo "<script>alert('Passwords do not match')</script>";
      }
      elseif($email=='' || $name==''){
        echo "<script>alert('Either Name or Email field is empty')</script>";
      }
      else {
     
     //connections
        $con = mysqli_connect("localhost","root","");
        mysqli_select_db($con,"gruuve");

        $qw = "select * from users where email=$email";
        $qw1=mysqli_query($con, $qw);
        if(mysqli_num_rows($qw1)>0){
          echo "<script>alert('User Already Exist')</script>";

        }
        else {
        $insert_query = "insert into users (name, email, password) values ('$name','$email','$pass1')";
        $res=mysqli_query($con, $insert_query);
        echo "<script>window.location.href = \"registered.html\";</script>";
      }
      }
  
      mysqli_close($con);
    }
    
    ?>
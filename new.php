<?php 

$user_id = $_GET['user_id']

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
      <title>Add Website to Gruuve</title>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1"><font class="temp">Gruuve </font><font class="subtag">Search Console : Add Website</font></span>
        </nav>
        <br><br>
        <div class="container subtag3">
            <center>
                Your dream to make your website show on the webpage is just few steps apart.<br>
                Please fill up the necessary details of your website to complete the process.<br>
            </center>

<!--form start-->
                <form method="POST" action="process.php">
                <input type="text" name="user_id" value="<?php echo "$user_id"; ?>" hidden>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Result header</label>
                      <input type="text" class="form-control" placeholder="Result header" name="header">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Result content</label>
                            <input type="text" class="form-control" placeholder="Result content" name="content">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">URL/Link</label>
                        <input type="text" class="form-control" placeholder="URL here" name="link">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keywords</label>
                        <input type="text" class="form-control" placeholder="Keywords" name="keywords">
                    </div>
                    <br>
                    <center><button type="submit" name="submit" class="btn btn-dark btn-lg">Add Website to Gruuve Search</button></center>
                  </form>
<!--form end-->

        </div>
        <br><br><br><br>

        </body>
        </html>


    

        

        ?>


        
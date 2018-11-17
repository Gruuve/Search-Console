<?php 
        
        if(isset($_POST['submit'])){

            $user_d = $_POST['user_id'];
            $header = $_POST['header'];
            $content = $_POST['content'];
            $link = $_POST['link'];
            $keywords = $_POST['keywords'];
            include("db.php");


            
            $qwery1 = "insert into websites (user_id, header, link, content, keywords) values ($user_d,'$header','$link','$content','$keywords')";
            mysqli_query($con, $qwery1);

            //echo "<script>alert('Done')</script>";

            echo "<script>window.location.href = \"dashboard.php?user_id=$user_d\";</script>";
            

        }

        

        ?>
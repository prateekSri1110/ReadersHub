<?php
   if(isset($_POST['submit']))
   {
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "credentials";
        $con = mysqli_connect($server, $username, $password, $database);    
        if(! $con)
        {
            die ("Connection failed due to" . mysqli_connect_error());
        }

        $pname = $_POST['pname'];
        $title = $_POST['title'];
        $data = $_POST['data'];        
        
        $sql = "INSERT INTO content(pname,title,data) VALUES('$pname','$title','$data')";        
        
        if ($con->query($sql) == true)
        {
            $insert=true;     
            header('Location: http://localhost/ReadersHub/upload.php');              
        }
        else
        {
            echo "ERROR: $sql <br> $con->error";
        }
        $con->close();
   }
?>
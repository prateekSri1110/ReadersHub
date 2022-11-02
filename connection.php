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

        $fname = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO recorddata(fname,email,phone,password) VALUES('$fname','$email','$phone','$password')";
        $login = "SELECT email , password FROM recorddata WHERE email = $email , password = $password";
        echo $login;
        if ($con->query($sql) == true)
        {
            $insert=true;
            header('Location: http://localhost/ReadersHub/login.php');
        }
        else
        {
            echo "ERROR: $sql <br> $con->error";
        }
        $con->close();
   }
?>
<?php   
    if(isset($_POST['login']))
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
        $email = $_POST['email'];
        $password = $_POST['password'];
        $loginquery = "SELECT * FROM recorddata WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($con,$loginquery);
        $count = mysqli_num_rows($result);
        echo $count;
        if($count>0)
        {
            header('Location: http://localhost/ReadersHub/option.html');
            // echo "login successful!";        
        }
        else
        {
            $alert = "<script>alert('login failed!');</script>";
            echo $alert;
            header('Location: http://localhost/ReadersHub/login.php');
        }
        $con->close();
    }
?>
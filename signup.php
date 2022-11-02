<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Readers Hub</title>
    <link rel="icon" href="mainlogo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsd-elivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">        
    </script>    
</head>

<body background="https://media.istockphoto.com/photos/september-back-to-school-or-college-flatlay-with-supplies-on-the-picture-id960330114?k=6&m=960330114&s=170667a&w=0&h=fvbwssu4XyyAan4o93xAW-C6_FFguCTZmvQoiA8YSS8=" class="responsive p-3" style="background-repeat: repeat; background-size: cover;">

    <div class="container">
        <div class="container" style="padding: 10%; color: white;">
            <center>
                <form action="connection.php" method="post" style="background-color: black; padding: 1%; opacity: 0.7; border-radius: 5%; width: 60%; height: auto;">
                    <center><img src="mainlogo1.png" style="width: 15%; height: auto;"></center>
                    <div class="form-group"><input style ="width: 100%; height: auto" type="name" class="form-control" id="name" placeholder="Enter Full Name" name="name" required></div>
                    <br>
                    <div class="form-group"><input style = "width: 100%; height: auto" type="email" class="form-control" id="email" placeholder="Enter email" name="email" required></div>
                    <br>
                    <div class="form-group"><input style ="width: 100%; height: auto" type="phone" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" required></div>
                    <br>
                    <div class="form-group"><input style ="width: 100%; height: auto" type="password" class="form-control" id="passw" placeholder="Enter password" name="password" required></div>
                    <br>
                    <center>
                        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">Remember me</label></div>
                        <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>                        
                    </center>
                    <p>existing user?<a href="login.php"> login</a></p>
                </form>
            </center>
            </div>
        </div>
</body>

</html>
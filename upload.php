<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Readers Hub - Upload</title>
    <link rel="icon" href="mainlogo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
    </script>
</head>

<body background="upload.jpg " class="responsive" style="background-repeat: no-repeat; background-size: cover;">

    <div class="container">
        <center>
            <div class="container" style="padding: 10%; color: white;">
                <form action="connect.php" method="post" style="background-color: black; padding: 1%; opacity: 0.7; border-radius: 5%; width: 60%; height: auto;">
                    <center><img src="mainlogo1.png" style="width: 15%; height: auto;"></center>
                    <div class="form-group"><input type="pname" class="form-control" id="pname" placeholder="Enter Writer's Name" name="pname" required></div>
                    <br>
                    <div class="form-group"><input type="title" class="form-control" id="title" placeholder="Enter Title" name="title" required></div>
                    <br>                    
                    <div class="form-group">                    
                    <textarea rows="9" cols="90" type="data" class="form-control" id="data" placeholder="Enter Content" name="data" required></textarea></div>
                    <br>
                    <center>                        
                        <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                        <a href="uploads.php">                            
                            <button type="button" class="btn btn-info btn-block" name="check">Check Uploads</button>
                        </a>
                    </center>            
                </form>
            </div>
        </center>
    </div>
</body>

</html>
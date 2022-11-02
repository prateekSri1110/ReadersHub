
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Readers Hub - Uploads</title>
    <link rel="icon" href="mainlogo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');
        .heart-btn {
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .content {
            padding: 7px 10px;
            display: flex;
            border: 2px solid #eae2e1;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .content.heart-active {
            border-color: #f9b9c4;
            background: #fbd0d8;
        }
        
        .heart {
            position: absolute;
            background: url("heart.png") no-repeat;
            background-position: left;
            background-size: 100%;
            height: 100px;
            width: 30px;
            top: 50%;
            left: 21%;
            transform: translate(-50%, -50%);
        }
        
        .text {
            font-size: 21px;
            margin-left: 30px;
            color: grey;
            font-family: 'Montserrat', sans-serif;
        }
        
        .numb:before {
            content: '1';
            font-size: 21px;
            margin-left: 7px;
            font-weight: 600;
            color: #9C9496;
            font-family: sans-serif;
        }
        
        .numb.heart-active:before {
            content: '2';
            color: #000;
        }
        
        .text.heart-active {
            color: #000;
        }
        
        .heart.heart-active {
            animation: animate .8s steps(28) 1;
            background-position: right;
        }
        
        @keyframes animate {
            0% {
                background-position: left;
            }
            100% {
                background-position: right;
            }
        }
    </style>
</head>


<body background="background.jpg" class="responsive" style="background-repeat: repeat; background-size: contain;">
    <div class="container mt-1">
        <div class="row p-lg-1 bg-gradient" style="width: 92%; position: fixed;">
            <div class="col-sm-5" style="width: 50%">
                <a style="text-decoration: none; color: #000;" href="option.html">
                    <img style="width: 10%;" src="back.png" alt="back">
                    <B>UPLOADS</B>
                </a>
            </div>
            <div class="col-lg-5" style="width: 50%">
            <a href="about.html">
                    <img src="mainlogo1.png" style="margin-left: 90%; width: 12%; height: auto;" alt="logo"></a>
            </div>
        </div>
        <div class="container p-5" style="width: 85%; margin-right: 15%;">
            <div class="col sm-4"></div>
    <?php
    $conn = mysqli_connect("localhost","root","","credentials");
    if($conn -> connect_error)
    {
        die("connection failed! : ". $conn->connect_error);        
    }
    $newsql = "SELECT pname , title , data FROM content";
    $res = $conn->query($newsql);

    if($res->num_rows > 0)
    {
        while ($row = $res -> fetch_assoc())
        {
            echo "<center><br>";
            echo "<u><h1>".$row['title']."</h1></u><cite>".$row['pname']."</cite>";
            echo "</center>";
            echo "<p>".$row['data']."</p><hr>";
        }              
    }
    else
    {
        echo "0 result";
    }
    $conn->close();
    ?>
    </div>
    </div>

</body>

</html>
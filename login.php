<?php
require_once "vendor/autoload.php";
use Twilio\Rest\Client;
$sid='AC0611df72f79764b86164ca799516b025';
$token='debdcbebebfc928ac40c79ff68803852';
$em='';
$pass1='';
$mess='';
$error='';
if(isset($_POST["submit1"]))
{
    $em = $_POST['emm'];
    $pass1=$_POST['passw'];
    $num1=$_POST['num1'];
    $data=file_get_contents("data.json");
    $data=json_decode($data,true);
    foreach($data as $row)
    {
        if($em==$row["uemail"] and $num1==$row["number"])
        {
            if($pass1==$row["passwor"])
            {
                $client =new Client($sid,$token);
                $client->messages->create($row['number'],array(
                "from"=>"+12058285648", "body"=>"Your OTP is ". $row['pin']));
                header("location: number.php");
                break;

            }
            else
            {
              $error='There is some error ';   
            }
        }
        
    }

}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <title> Login Good Health</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand" href="#">Login Good Health</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            
            <div class="mx-2">
                <button class="btn btn-danger active"> <a href="login.php"> Login</a></button>
                <button class="btn btn-danger"> <a href="signup.php">SignUp </a></button>
            </div>
        </div>
    </nav>

    
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images (1).jfif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to Good Health</h2>
                    <p>Technology, News, and Brands</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="download2.jfif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block ">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images.jfif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-danger">
                    <h4>Third slide label</h4>
                    <h5>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-header">
                    <h4 class="modal-title text-center" id="exampleModalLabel">Login</h4>
                    
                </div>
    <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emm">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputnumber">Contact No. </label>
                            <input type="text" class="form-control" id="exampleInputnumber" name="num1">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="passw">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit1" id="mybtn">Login</button>
                    </form>
                </div>
               
                <footer class="footer bg-warning">
        <div class="container">
            <div class="row ">             
                <div  class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="signup.php">Resiter</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                      Boys Hostel 1<br>
                      Block 45 LPU<br>
                      Phagwara,Punjab<br>
                      Tel.: +123456789<br>
                      Fax: +1234567890<br>
                      Email: <a href="mailto:singhal.gourav98gmail.com">singhal@gmail.com</a>
                   </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="col-auto">
                        <a href="http://google.com/+">Google+</a>
                        <a href="http://www.facebook.com/profile.php?id=">Facebook</a>
                        <a href="http://www.linkedin.com/in/">LinkedIn</a>
                        <a href="http://twitter.com/">Twitter</a>
                        <a href="http://youtube.com/">YouTube</a>
                        <a href="mailto:">Mail</a>
                    </div>
                </div>
           </div>
           <divc class="row justify-content-center">             
                <div class="text-center">
                    <p>© Copyright 2020 Good Health</p>
                </div>
           </div>
        </div>
    </footer>
        


    

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

</body>

</html>

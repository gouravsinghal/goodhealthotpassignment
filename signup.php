<?php

$message ='';
$error ='';
if(isset($_POST["submit"]))
{
 if(empty($_POST["uname"]))
 {
    $error = "<lable class ='text-danger'> Enter username</lable>";
 }
 else
 {
    if(file_exists('data.json'))
    {
        $current=file_get_contents('data.json');
        $array_data=json_decode($current,true);
        $extra=array('uname'=> $_POST['uname'],'uemail'=>$_POST['uemail'],'passwor'=>$_POST['pass'],'number'=>$_POST['num'],'pin'=>rand(0,9).rand(0,9).rand(0,9).rand(0,9));
        $array_data[]=$extra;
        $final=json_encode($array_data);
        if(file_put_contents('data.json',$final))
        {
            $message="you are signed up";
        }

    }
    else
    {
        $error='Json file not exixts';
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


    <title> SignUP Good Health</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand" href="#"> SignUP Good Health</a>
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
                <button class="btn btn-danger"> <a href="login.php"> Login</a></button>
                <button class="btn btn-danger"> <a href="signup.php">SignUp</a></button>
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
                    <h4 class="modal-title text-center" id="exampleModalLabel">SignUp Here</h4>
                    
                </div>
         <div class="modal-body">
                    <form method="post">
                        <?php
                        if(isset($error))
                        {
                            echo $error;
                        }
                        ?>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="name" class="form-control" id="username" name="uname">
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uemail">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                        </div>
                          <div class="form-group">
                            <label for="number">Contact no.</label>
                            <input type="text" class="form-control" id="number" name="num">
                          </div>
                        <button type="submit" class="btn btn-primary" value="Append" name="submit">Create Account</button>
                        <?php
                        if(isset($message))
                        {
                            echo $message;
                        }
                        ?>

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
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
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

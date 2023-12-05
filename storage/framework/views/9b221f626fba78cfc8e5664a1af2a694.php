<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Koulen' rel='stylesheet'>
   
    
    <style>
        .navbar {
            font-family: 'Koulen';
            color: #FFFFFF;
        }
        .nav-item{
            font-size: 25px;
        }

        .aboutus{
            margin-top: 20px;
            color: white; 
            font-size: 35px;
            font-family: 'Koulen';
            color: #FFFFFF;
            position: relative;
            text-align: center;
        }

        .row{
            margin-top: 4%;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .container {
            color:black;
            margin-left: 4rem;
            border-radius: 20px;
            position: relative;
        }

        .intro{
            color:black;
            font-size: 18px;
            text-align: center;
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .login {
            color: white;
            text-align: center;
            margin-top: 40px;
            font-size: 70px;
            font-family: 'Koulen';
            color: #FFFFFF;
        }

        .formlogin {
            margin-left: 20px;
            margin-right: 20px;
        }

        .ask{
            color:white;
            text-align: right;
        }

        .button{
            text-align: center;
        }

        .btn-info {
            color: #ffffff;
            background-color: #5CB3C2;
            border-color: #5CB3C2;
            justify-content: center;
            padding-left: 40px;
            padding-right: 40px;
        }

        </style>
    <title>Login</title>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <h1 class="mytodolist" style="font-size: 40px">MYTODOLIST</h1>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo e(url('/login')); ?>">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/register')); ?>">Register</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="loginpage">
        <div class="container-fluid">
            <div class="row">
                <div class="container bg-secondary col-lg-3">
                    <h1 class="aboutus">About Us</h1>
                    <p class="intro">Welcome to mytodolist.
                        <br>
                        <br>A modern solution for managing 
                        <br>and optimizing your time! With our app,
                        <br>you will discover a more efficient way 
                        <br>to schedule, manage tasks, and plan 
                        <br>your daily activities.
                        <br>mytodolist is designed with a user-friendly
                        <br> interface, making it easy for 
                        <br>everyone to utilize. Whether you are 
                        <br>a busy professional, 
                        <br>a student in need of organizing your 
                        <br>class schedule, or a homemaker looking 
                        <br>to plan family activities, we have 
                        <br>features tailored for you.
                    </p>
                    
                </div>
                <div class="container bg-secondary col-lg-7">
                    <h1 class="login">LOGIN</h1>
                        <div class="formlogin">
                            <form action="/action_page.php">
                                <div class="mb-3 mt-5">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                </div>
                                <div class="mb-3">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                                </div>
                                <div class="ask">
                                <p>Don't have an account? <a style="color:#F4BA00" href="<?php echo e(url('/register')); ?>">register here</a></p>
                                </div>
                                <div class="button" >
                                    <a type="submit" href="<?php echo e(url('dashboard')); ?>" class="btn btn-info">Login</a>
                                </div>
                            </form>
                        </div>
                </div>
            </div>  
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html><?php /**PATH /Users/novan/Documents/XAMPP/xamppfiles/htdocs/WebProg/Project/resources/views/login.blade.php ENDPATH**/ ?>
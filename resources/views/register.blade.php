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
        body {
            font-family: 'Koulen';
            color: #FFFFFF;
        }
        .nav-item{
            font-size: 25px;
        }

        .row{
            margin-top: 45px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .container {
            color:black;
            justify-content: center;
            border-radius: 20px;
        }

        .register {
            font-family: 'Koulen';
            color: #FFFFFF;
            color: white;
            text-align: center;
            position: relative;
            margin-top: 28px;
            font-size: 50px;
        }

        .registform{
            font-size: 20px;
            text-align: left;
            margin-left: 25px;
            margin-right: 25px;
        }

        .button{
            text-align: center;
            
        }

        .btn-info {
            color: #ffffff;
            background-color: #5CB3C2;
            border-color: #5CB3C2;
            position: relative;
            margin-bottom: 20px;
            padding-left: 45px;
            padding-right: 45px;
        }

        </style>

        <script>
         
        </script>

    <title>Register</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
                <h1 class="mytodolist" style="font-size: 40px">MYTODOLIST</h1>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="{{url('login')}}">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="{{url('register')}}">Register</a>
                </li>
            </ul>
        </div>
        
      </nav>
    <div class="register">
        <div class="row">
            <div class="container bg-secondary col-lg-7">
                <h1 class="register">Register</h1>
                <form class="registform" action="/action_page.php">
                    <div class="mb-2 mt-2">
                      <label for="name">Name:</label>
                      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>
                    <div class="mb-2">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="mb-2">
                        <label for="username">Username:</label>
                        <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
                    </div>
                    <div class="mb-2">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    </div>
                    <div class="mb-2">
                        <label for="pwd">Confirm Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Retype password" name="pswd">
                    </div>
                    <div class="button">
                        <a type="submit" class="btn btn-info">Register</a>
                    </div>
                  </form>
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
</html>
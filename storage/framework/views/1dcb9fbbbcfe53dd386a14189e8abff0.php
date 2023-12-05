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

    </style>
    
    <title>MYTODOLIST - About Us</title>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <h1 class="mytodolist" style="font-size: 40px">MYTODOLIST</h1>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/dashboard')); ?>">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/dashboard/tasks')); ?>">Tasks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/')); ?>">My Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo e(url('/')); ?>">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/')); ?>">Log Out</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  </body>
</html><?php /**PATH /Users/novan/Documents/XAMPP/xamppfiles/htdocs/WebProg/Project/resources/views/aboutus.blade.php ENDPATH**/ ?>
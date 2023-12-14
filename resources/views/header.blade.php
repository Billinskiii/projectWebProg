<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <h1 class="mytodolist" style="font-size: 40px">MYTODOLIST</h1>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('/dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/dashboard/tasks')}}">Tasks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/dashboard/myaccount')}}">My Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/dashboard/aboutus')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/login')}}">Log Out</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
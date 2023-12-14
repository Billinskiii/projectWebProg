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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    
    <style>
      .navbar {
            font-family: 'Koulen';
            color: #FFFFFF;
        }
      body {
            font-family: 'Koulen';
            color: #02587B;
        }
        .nav-item{
            font-size: 25px;
        }

        .dashboard-page{
          height: 650px;
          
        }

        .name{
          font-size:15px;
          margin-top: 10px;
          margin-bottom: 20px;
        }
        .status{
          font-size: 20px;
          margin-bottom: 0px;
        }

        .row{
            margin-top: 4%;
        }

        .container-fluid .tasks {
            margin-left: 4rem;
            border-radius: 20px;
            position: relative;
            max-height: 650px;
            margin-bottom: 50px;
        }

        .container-fluid .profiles {
            margin-left: 4rem;
            border-radius: 20px;
            position: relative;
            max-height: 650px;
            margin-bottom: 50px;
        }

        /* Calendar */

        .calendars{
          width: 100%;
          height: 450px;
        }
        header .icons{
  display: flex;
}
.topcal .icons span{
  height: 38px;
  width: 38px;
  margin: 0 1px;
  cursor: pointer;
  color: #878787;
  text-align: center;
  line-height: 38px;
  font-size: 1.9rem;
  user-select: none;
  border-radius: 50%;
}
.icons span:last-child{
  margin-right: -10px;
}
.topcal .icons span:hover{
  background: #f2f2f2;
}
.topcal .current-date{
  font-size: 1rem;
  font-weight: 500;
}


.calendar{
  padding: 0px;
}
.calendar ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  text-align: center;
  margin:0;
  padding: 0;
}
.calendar .days{
  margin-bottom: 20px;
}
.calendar li{
  color: #333;
  width: calc(100% / 7);
  font-size: 0.75rem;
}
.calendar .weeks li{
  font-weight: 500;
  cursor: default;
}
.calendar .days li{
  z-index: 1;
  cursor: pointer;
  position: relative;
  margin-top: 30px;
}
.days li.inactive{
  color: #aaa;
}
.days li.active{
  color: #fff;
}
.days li::before{
  position: absolute;
  content: "";
  left: 50%;
  top: 50%;
  height: 40px;
  width: 40px;
  z-index: -1;
  border-radius: 50%;
  transform: translate(-50%, -50%);
}
.days li.active::before{
  background: #333;
}
.days li:not(.active):hover::before{
  background: #f2f2f2;
}
     
      

    </style>
    
    <title>MYTODOLIST - Dashboard</title>
  </head>
  <body>
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
    <div class="dashboardpage">
      <div class="container-fluid tasks">
        <div class="row">
          <div class="container-fluid tasks bg-secondary col-lg-6">
            <h1 class="task" style="margin-top:10px; font-size:20px">Tasks</h1>
              <div class="content">
                <input 
                  type="text" class="text" value="A new task" readonly>
              </div>
          </div>
          <div class="container-fluid profiles bg-light col-lg-3">
              <h1 class="profile" style="font-color: #02587B; margin-top: 10px">Profile</h1>
              <div class="photoprofile">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center mx-auto mt-3">
                      <img src="https://i.guim.co.uk/img/media/63d175d28154b3b63e1b4de5737c1a6c0b750ad2/821_577_3334_2001/master/3334.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=cd9e71bd5a86652b50b7c656991a8b04" style="width:100px" class="img-fluid  avatar-sm rounded-circle" alt="photo">
                    </div>
                  </div>
                  <div class="name text-center">
                    <a>Lorem Ipsum</a>
                  </div>
              </div>  
              <div class="calendars">
                <div class="topcal">
                  <p class="current-date"></p>
                    <div class="icons">
                      <span id="prev" class="material-symbols-rounded">chevron_left</span>
                      <span id="next" class="material-symbols-rounded">chevron_right</span>
                    </div>
                </div>
                    <div class="calendar">
                      <ul class="weeks">
                        <li>Sun</li>
                        <li>Mon</li>
                        <li>Tue</li>
                        <li>Wed</li>
                        <li>Thu</li>
                        <li>Fri</li>
                        <li>Sat</li>
                      </ul>
                      <ul class="days">
                        
                      </ul>
                    </div>
              </div>
              

                </div>
                    
            </div>
      
            
        </div>
        </div>
      </div>
    </div>
  
    <!-- Optional JavaScript; choose one of the two! -->
    <script>
      window.addEventListener('load', () => {
	const form = document.querySelector("#new-task-form");
	const input = document.querySelector("#new-task-input");
	const list_el = document.querySelector("#tasks");

	form.addEventListener('submit', (e) => {
		e.preventDefault();

		const task = input.value;

		const task_el = document.createElement('div');
		task_el.classList.add('task');

		const task_content_el = document.createElement('div');
		task_content_el.classList.add('content');

		task_el.appendChild(task_content_el);

		const task_input_el = document.createElement('input');
		task_input_el.classList.add('text');
		task_input_el.type = 'text';
		task_input_el.value = task;
		task_input_el.setAttribute('readonly', 'readonly');

		task_content_el.appendChild(task_input_el);

		const task_actions_el = document.createElement('div');
		task_actions_el.classList.add('actions');
		
		const task_edit_el = document.createElement('button');
		task_edit_el.classList.add('edit');
		task_edit_el.innerText = 'Edit';

		const task_delete_el = document.createElement('button');
		task_delete_el.classList.add('delete');
		task_delete_el.innerText = 'Delete';

		task_actions_el.appendChild(task_edit_el);
		task_actions_el.appendChild(task_delete_el);

		task_el.appendChild(task_actions_el);

		list_el.appendChild(task_el);

		input.value = '';

		task_edit_el.addEventListener('click', (e) => {
			if (task_edit_el.innerText.toLowerCase() == "edit") {
				task_edit_el.innerText = "Save";
				task_input_el.removeAttribute("readonly");
				task_input_el.focus();
			} else {
				task_edit_el.innerText = "Edit";
				task_input_el.setAttribute("readonly", "readonly");
			}
		});

		task_delete_el.addEventListener('click', (e) => {
			list_el.removeChild(task_el);
		});
	});
});


/* CALENDAR */

const daysTag = document.querySelector(".days"),
currentDate = document.querySelector(".current-date"),
prevNextIcon = document.querySelectorAll(".icons span");
// getting new date, current year and month
let date = new Date(),
currYear = date.getFullYear(),
currMonth = date.getMonth();

console.log(date, currYear, currMonth);
// storing full name of all months in array
const months = ["January", "February", "March", "April", "May", "June", "July",
              "August", "September", "October", "November", "December"];
const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
    let liTag = "";
    for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }
    for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
        // adding active class to li if the current day, month, and year matched
        let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
                     && currYear === new Date().getFullYear() ? "active" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
    }
    for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
    }
    currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
    daysTag.innerHTML = liTag;
}
renderCalendar();
prevNextIcon.forEach(icon => { // getting prev and next icons
    icon.addEventListener("click", () => { // adding click event on both icons
        // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;
        if(currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
            // creating a new date of current year & month and pass it as date value
            date = new Date(currYear, currMonth, new Date().getDate());
            currYear = date.getFullYear(); // updating current year with new date year
            currMonth = date.getMonth(); // updating current month with new date month
        } else {
            date = new Date(); // pass the current date as date value
        }
        renderCalendar(); // calling renderCalendar function
    });
});
</script>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
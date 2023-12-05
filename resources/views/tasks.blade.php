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

      :root {
        --dark: #374151;
        --darker: #1F2937;
        --darkest: #111827;
        --darkblue: #02587B;
        --yellow: #F4BA00;
        --purple: #8B5CF6;
        --light: #EEE;
      }
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

        .container-fluid .tasks {
           margin-top: 3em;
            border-radius: 20px;
            position: relative;
           
            margin-bottom: 50px;
        }

        #new-task-form {
          display: flex;;
        }

        input, button {
          appearance: none;
          border: none;
          outline: none;
          background: none;
        }
        #new-task-input {
          flex: 1 1 0%;
          background-color: var(--darker);
          padding: 1rem;
          border-radius: 1rem;
          margin-right: 1rem;
          color: var(--light);
          font-size: 1.25rem;
        }

        #new-task-submit {
          color: var(--dark);
          font-size: 1.25rem;
          font-weight: 700;
          background-image: linear-gradient(to right, var(--darkest), var(--purple));
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          cursor: pointer;
          transition: 0.4s;
        }

        #new-task-submit:hover {
          opacity: 0.8;
        }

        #new-task-submit:active {
          opacity: 0.6;
        }

        main {
          flex: 1 1 0%;
          max-width: 800px;
          width: 100%;
          margin: 0 auto;
        }

        .task-list {
          padding: 1rem;
        }

        .task-list h2 {
          font-size: 1.5rem;
          font-weight: 300;
          color: var(--darkblue);
          margin-bottom: 1rem;
        }

        #tasks .task {
          display: flex;
          justify-content: space-between;
          background-color: var(--darkest);
          padding: 1rem;
          border-radius: 1rem;
          margin-bottom: 1rem;
        }

        .task .content {
          flex: 1 1 0%;
        }

        .task .content .text {
          color: var(--light);
          font-size: 1.125rem;
          width: 100%;
          display: block;
          transition: 0.4s;
        }

        .task .content .text:not(:read-only) {
          color: var(--yellow);
        }

        .task .actions {
          display: flex;
          margin: 0 -0.5rem;
        }

        .task .actions button {
          cursor: pointer;
          margin: 0 0.5rem;
          font-size: 1.125rem;
          font-weight: 700;
          text-transform: uppercase;
          transition: 0.4s;
        }

        .task .actions button:hover {
          opacity: 0.8;
        }

        .task .actions button:active {
          opacity: 0.6;
        }

        .task .actions .edit {
          background-image: linear-gradient(to right, var(--yellow), var(--yellow));
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
        }

        .task .actions .delete {
          color: crimson;
        }

    </style>

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
    </script>
    
    <title>MYTODOLIST - Tasks</title>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <h1 class="mytodolist" style="font-size: 40px">MYTODOLIST</h1>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{url('/dashboard/tasks')}}">Tasks</a>
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
    <div class="taskspage">
      <div class="container-fluid tasks">
        <div class="row">
          <div class="container-fluid tasks bg-secondary col-lg-6">
            <header>
              <h1 style="margin-top: 15px;">Tasks</h1>
              <form id="new-task-form">
                <input 
                  type="text" 
                  name="new-task-input" 
                  id="new-task-input" 
                  placeholder="What do you have planned?" />
                <input 
                  type="submit"
                  id="new-task-submit" 
                  value="Add task" />
              </form>
            </header>
            <main>
              <section class="task-list">
                <h2>Task List</h2>
          
                <div id="tasks">
          
                <!--  <div class="task">
                    <div class="content">
                      <input 
                        type="text" 
                        class="text" 
                        value="Your new task">
                    </div> 
                    <div class="actions">
                       <button class="edit">Edit</button>
                      <button class="delete">Delete</button>
                    </div> 
                  </div> -->
          
                </div>
              </section>
            </main>
          </div>
        </div>
      </div>
    </div>
    <script src="tasks.js">
    </script>
  </body>
</html>
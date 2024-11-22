<?php
    require_once "navigationbar.php";

?>



  <div class="main-content">
   <div class="header">
    <h1>
     Coordinator Dashboard
    </h1>
    <div class="user-info">
     <img alt="Profile picture of the user" height="40" src="https://storage.googleapis.com/a1aa/image/Fks1jZqsm6JSMhqR3RT0jsoTMRsLNxOG0HXw8F5wedC2qj5JA.jpg" width="40"/>
     <span>
      John Doe
     </span>
    </div>
   </div>
   <div class="dashboard-content">
    <div class="stats-grid">
     <div class="stats-box">
      <h4>
       Total Projects
      </h4>
      <p>
       10
      </p>
     </div>
     <div class="stats-box">
      <h4>
       Recent Project
      </h4>
      <p>
       Project 10
      </p>
     </div>
     <div class="stats-box">
      <h4>
       Completed Projects
      </h4>
      <p>
       5
      </p>
     </div>
     <div class="stats-box">
      <h4>
       Ongoing Projects
      </h4>
      <p>
       5
      </p>
     </div>
     <div class="add-project-box" onclick=" window.location.href='register.php';">
            <i class="fas fa-plus">
            </i>
            Add New Project
     </div>
    </div>
    <h2 class="projects-title">
     Projects
    </h2>
    <div class="projects-grid">
     <div class="project-box">
      <h4>
       Project 1
      </h4>
      <p>
       This is a dummy description for Project 1. It provides an overview of the project's objectives and goals.
      </p>
      <p class="date">
       Created on: 2023-01-01
      </p>
      <p class="supervisor">
       Supervisor: Jane Smith
      </p>
     </div>
     <div class="project-box">
      <h4>
       Project 2
      </h4>
      <p>
       This is a dummy description for Project 2. It provides an overview of the project's objectives and goals.
      </p>
      <p class="date">
       Created on: 2023-02-01
      </p>
      <p class="supervisor">
       Supervisor: John Doe
      </p>
     </div>
     <div class="project-box">
      <h4>
       Project 3
      </h4>
      <p>
       This is a dummy description for Project 3. It provides an overview of the project's objectives and goals.
      </p>
      <p class="date">
       Created on: 2023-03-01
      </p>
      <p class="supervisor">
       Supervisor: Alice Johnson
      </p>
     </div>
     <div class="project-box">
      <h4>
       Project 4
      </h4>
      <p>
       This is a dummy description for Project 4. It provides an overview of the project's objectives and goals.
      </p>
      <p class="date">
       Created on: 2023-04-01
      </p>
      <p class="supervisor">
       Supervisor: Bob Brown
      </p>
     </div>
     <div class="project-box">
      <h4>
       Project 5
      </h4>
      <p>
       This is a dummy description for Project 5. It provides an overview of the project's objectives and goals.
      </p>
      <p class="date">
       Created on: 2023-05-01
      </p>
      <p class="supervisor">
       Supervisor: Carol White
      </p>
     </div>
     <div class="project-box">
      <h4>
       Project 6
      </h4>
      <p>
       This is a dummy description for Project 6. It provides an overview of the project's objectives and goals.
      </p>
      <p class="date">
       Created on: 2023-06-01
      </p>
      <p class="supervisor">
       Supervisor: David Green
      </p>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>
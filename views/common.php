

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/projectforge/config.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../Asset/CSS/common.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">Project Forge</div>
            <div class="user">
                <i class="fas fa-cogs settings"></i>
                <div class="avatar"></div>
            </div>
        </div>
        <div class="content">
            <div class="stats">
                <div class="stat">
                    <div class="number">10</div>
                    <div class="label">Total Projects</div>
                </div>
                <div class="stat">
                    <div class="number">8</div>
                    <div class="label">Active Projects</div>
                </div>
                <div class="stat">
                    <div class="number">2</div>
                    <div class="label">Deactivated Projects</div>
                </div>
                <div class="stat">
                    <div class="number">50</div>
                    <div class="label">Ongoing Projects</div>
                </div>
            </div>
            <div class="projects">
                <div class="project">
                    <div class="status ongoing">Ongoing</div>
                    <div class="title">Project 1</div>
                    <div class="description">Description of project 1. This is a brief overview of what the project is about.</div>
                    <div class="actions">
                        <div class="role member">Member</div>
                        
                        <button onclick="window.location.href='<?= STUDENT_VIEWS . 'dashboard.php'; ?>';">Visit</button>

                    </div>
                    <div class="progress-bar">
                        <div class="progress" style="width: 70%;"></div>
                        <div class="progress-percentage">70%</div>
                    </div>
                </div>
                <div class="project">
                    <div class="status completed">Completed</div>
                    <div class="title">Project 2</div>
                    <div class="description">Description of project 2. This is a brief overview of what the project is about.</div>
                    <div class="actions">
                        <div class="role co-supervisor">Co-Supervisor</div>
                        <button>Visit</button>
                    </div>
                    <div class="progress-bar">
                        <div class="progress" style="width: 100%;"></div>
                        <div class="progress-percentage">100%</div>
                    </div>
                </div>
                <div class="project">
                    <div class="status terminated">Terminated</div>
                    <div class="title">Project 3</div>
                    <div class="description">Description of project 3. This is a brief overview of what the project is about.</div>
                    <div class="actions">
                        <div class="role supervisor">Supervisor</div>
                        <button>Visit</button>
                    </div>
                    <div class="progress-bar">
                        <div class="progress" style="width: 30%;"></div>
                        <div class="progress-percentage">30%</div>
                    </div>
                </div>
                <div class="project">
                    <div class="status ongoing">Ongoing</div>
                    <div class="title">Project 4</div>
                    <div class="description">Description of project 4. This is a brief overview of what the project is about.</div>
                    <div class="actions">
                        <div class="role member">Member</div>
                        <button>Visit</button>
                    </div>
                    <div class="progress-bar">
                        <div class="progress" style="width: 50%;"></div>
                        <div class="progress-percentage">50%</div>
                    </div>
                </div>
                <div class="project">
                    <div class="status completed">Completed</div>
                    <div class="title">Project 5</div>
                    <div class="description">Description of project 5. This is a brief overview of what the project is about.</div>
                    <div class="actions">
                        <div class="role co-supervisor">Co-Supervisor</div>
                        <button>Visit</button>
                    </div>
                    <div class="progress-bar">
                        <div class="progress" style="width: 100%;"></div>
                        <div class="progress-percentage">100%</div>
                    </div>
                </div>
                <div class="project">
                    <div class="status terminated">Terminated</div>
                    <div class="title">Project 6</div>
                    <div class="description">Description of project 6. This is a brief overview of what the project is about.</div>
                    <div class="actions">
                        <div class="role supervisor">Supervisor</div>
                        <button>Visit</button>
                    </div>
                    <div class="progress-bar">
                        <div class="progress" style="width: 20%;"></div>
                        <div class="progress-percentage">20%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // JavaScript to dynamically change the status and progress bar
        const projects = [
            { status: 'ongoing', progress: 70 },
            { status: 'completed', progress: 100 },
            { status: 'terminated', progress: 30 },
            { status: 'ongoing', progress: 50 },
            { status: 'completed', progress: 100 },
            { status: 'terminated', progress: 20 }
        ];

        document.querySelectorAll('.project').forEach((project, index) => {
            const statusElement = project.querySelector('.status');
            const progressElement = project.querySelector('.progress');
            const progressPercentageElement = project.querySelector('.progress-percentage');

            statusElement.classList.add(projects[index].status);
            statusElement.textContent = projects[index].status.charAt(0).toUpperCase() + projects[index].status.slice(1);
            progressElement.style.width = projects[index].progress + '%';
            progressPercentageElement.textContent = projects[index].progress + '%';

            if (projects[index].progress < 25) {
                progressElement.style.backgroundColor = '#8bc34a'; // Light Green
            } else if (projects[index].progress < 50) {
                progressElement.style.backgroundColor = '#ffeb3b'; // Yellow
            } else if (projects[index].progress < 75) {
                progressElement.style.backgroundColor = '#03a9f4'; // Light Blue
            } else if (projects[index].progress < 100) {
                progressElement.style.backgroundColor = '#4caf50'; // Green
            } else {
                progressElement.style.backgroundColor = '#388e3c'; // Dark Green
            }
        });
    </script>
</body>
</html>
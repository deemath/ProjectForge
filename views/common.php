

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/projectforge/config/config.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        .header {
            background-color: white;
            padding: 20px;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .header .user {
            display: flex;
            align-items: center;
        }
        .header .user .settings {
            margin-right: 20px;
            cursor: pointer;
        }
        .header .user .avatar {
            width: 40px;
            height: 40px;
            background-color: #ddd;
            border-radius: 50%;
            cursor: pointer;
        }
        .content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }
        .stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .stats .stat {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            flex: 1;
            margin: 0 10px;
            text-align: center;
        }
        .stats .stat .number {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .stats .stat .label {
            font-size: 14px;
            color: #888;
        }
        .projects {
            display: flex;
            flex-wrap: wrap;
        }
        .project {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            flex: 1 1 calc(33.333% - 20px);
            box-sizing: border-box;
            position: relative;
        }
        .project .title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .project .description {
            font-size: 14px;
            margin-bottom: 10px;
        }
        .project .status {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            color: white;
        }
        .project .status.ongoing {
            background-color: #4caf50;
        }
        .project .status.completed {
            background-color: #2196f3;
        }
        .project .status.terminated {
            background-color: #f44336;
        }
        .project .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .project .role {
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            color: white;
        }
        .project .role.member {
            background-color: #d1c4e9;
        }
        .project .role.co-supervisor {
            background-color: #b2dfdb;
        }
        .project .role.supervisor {
            background-color: #ffcc80;
        }
        .project .actions button {
            background-color: #3f51b5;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .project .actions button:hover {
            background-color: #303f9f;
        }
        .project .progress-bar {
            background-color: #ddd;
            border-radius: 5px;
            overflow: hidden;
            margin-top: 10px;
            position: relative;
        }
        .project .progress-bar .progress {
            height: 10px;
            width: 0;
        }
        .project .progress-bar .progress-text {
            position: absolute;
            top: -20px;
            right: 0;
            font-size: 12px;
            color: #888;
        }
        .project .progress-bar .progress-percentage {
            position: absolute;
            top: 0;
            right: 10px;
            font-size: 12px;
            color: #888;
        }
    </style>
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
                        
                        <button onclick="window.location.href='<?= BASE_URL.$studentViews . 'tasklist1.php'; ?>';">Visit</button>

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
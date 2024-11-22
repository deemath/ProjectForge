<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Coordinator Dashboard
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #fff;
            color: #333;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar .logo {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        .sidebar .logo img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .sidebar .logo span {
            font-size: 20px; /* Reduced font size */
            font-weight: bold;
            color: #1e3a8a; /* text-blue-900 */
            margin-left: 8px; /* ml-2 */
        }
        .sidebar h2 {
            margin-bottom: 30px;
            font-size: 18px; /* Reduced font size */
        }
        .sidebar a {
            color: #333;
            text-decoration: none;
            margin: 10px 0;
            font-size: 16px; /* Reduced font size */
            display: flex;
            align-items: center;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: calc(100% - 250px); /* Adjust the width to account for the sidebar */
            position: fixed;
            top: 0;
            left: 250px;
            z-index: 1000;
        }
        .header h1 {
            margin: 0;
            font-size: 20px; /* Reduced font size */
        }
        .header .user-info {
            display: flex;
            align-items: center;
        }
        .header .user-info img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .header .user-info span {
            font-size: 14px; /* Reduced font size */
        }
        .dashboard-content {
            margin-top: 80px; /* Adjust this value to create space for the fixed header */
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }
        .stats-box {
            background-color: #fff;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 8px;
            text-align: center;
        }
        .stats-box h4 {
            margin: 0;
            font-size: 14px; /* Reduced font size */
        }
        .stats-box p {
            font-size: 12px; /* Reduced font size */
            margin: 5px 0;
        }
        .add-project-box {
            background-color: #1e3a8a; /* text-blue-900 */
            color: #fff;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 8px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
        .add-project-box:hover {
            background-color: #1a2e6b; /* Darker blue for hover effect */
        }
        .add-project-box i {
            margin-right: 10px;
        }
        .projects-title {
            font-size: 18px; /* Reduced font size */
            font-weight: bold;
            margin-bottom: 20px;
        }
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        .project-box {
            background-color: #fff;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 8px;
            text-align: center;
        }
        .project-box h4 {
            margin: 0;
            font-size: 14px; /* Reduced font size */
        }
        .project-box p {
            font-size: 12px; /* Reduced font size */
            margin: 5px 0;
        }
        .project-box .date {
            font-size: 10px; /* Reduced font size */
            color: #888;
        }
        .project-box .supervisor {
            font-size: 12px; /* Reduced font size */
            color: #555;
            margin-top: 5px;
        }
  </style>
 </head>
 <body>
  <div class="sidebar">
   <div class="logo">
    <img alt="Forge logo" height="40" src="https://storage.googleapis.com/a1aa/image/OuO6an8xGfX0My4BqEXNeKYOU1ciKAQud12YGf2EzRHPrOmnA.jpg" width="40"/>
    <span class="ml-2 text-xl font-bold text-blue-900">
     FORGE
    </span>
   </div>
   <h2>
    Dashboard
   </h2>
   <a href="#">
    <i class="fas fa-project-diagram">
    </i>
    Projects
   </a>
   <a href="#">
    <i class="fas fa-users">
    </i>
    Users List
   </a>
   <a href="#">
    <i class="fas fa-cogs">
    </i>
    Settings
   </a>
   <a href="#">
    <i class="fas fa-sign-out-alt">
    </i>
    Logout
   </a>
  </div>
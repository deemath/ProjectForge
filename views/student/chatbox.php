<?php
require_once "./navigationbar.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Box</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .header {
            background-color: #ffffff;
            padding: 20px;
            text-align: left;
            font-size: 24px;
            font-weight: bold;
            color: #3f51b5;
            border-bottom: 2px solid #ddd;
        }

        .content {
            display: flex;
            flex: 1;
            overflow: hidden;
        }

        .chat {
            flex: 3;
            padding: 20px;
            overflow-y: auto;
            background-color: #eef1f7;
        }

        .members {
            flex: 1;
            background-color: #ffffff;
            padding: 20px;
            border-left: 1px solid #ddd;
            overflow-y: auto;
        }

        .message {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            position: relative;
        }

        .message .avatar {
            width: 50px;
            height: 50px;
            background-color: #ddd;
            border-radius: 50%;
            position: relative;
        }

        .message .name {
            font-size: 14px;
            color: #555;
            text-align: center;
            margin-top: 5px;
            position: absolute;
            top: 60px;
            width: 100%;
        }

        .message .content {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 10px;
            flex: 1;
            margin-left: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .message.blue {
            justify-content: flex-end;
        }

        .message.blue .content {
            background-color: #3f51b5;
            color: white;
            margin-right: 15px;
        }

        .message.blue .name {
            color: #3f51b5;
        }

        .members .member {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .members .member .avatar {
            width: 40px;
            height: 40px;
            background-color: #ddd;
            border-radius: 50%;
            margin-right: 10px;
            position: relative;
        }

        .members .member .info {
            flex: 1;
        }

        .members .member .info .name {
            font-weight: bold;
        }

        .members .member .info .email {
            font-size: 12px;
            color: #888;
        }

        .footer {
            background-color: #ffffff;
            padding: 10px;
            border-top: 1px solid #ddd;
            display: flex;
            align-items: center;
        }

        .footer input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 10px;
        }

        .footer button {
            background-color: #3f51b5;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .footer button:hover {
            background-color: #303f9f;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Chat Box</div>
        <div class="content">
            <div class="chat">
                <!-- Message from another user -->
                <div class="message">
                    <div class="avatar"></div>
                    <div class="name">Member 1</div>
                    <div class="content">
                        This is a sample message from another user. It gives you an idea of how messages appear in the chatbox.
                    </div>
                </div>

                <!-- Message from the user -->
                <div class="message blue">
                    <div class="content">
                        This is a response message from the user. It is highlighted in blue to indicate it's from you.
                    </div>
                    <div class="avatar"></div>
                    <div class="name">You</div>
                </div>
            </div>

            <!-- Members Section -->
            <div class="members">
                <div class="member">
                    <div class="avatar"></div>
                    <div class="info">
                        <div class="name">John Doe</div>
                        <div class="email">john@example.com</div>
                    </div>
                </div>
                <div class="member">
                    <div class="avatar"></div>
                    <div class="info">
                        <div class="name">Jane Smith</div>
                        <div class="email">jane@example.com</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <input type="text" placeholder="Type a message...">
            <button>Send <i class="fas fa-paper-plane"></i></button>
        </div>
    </div>
</body>
</html>

<?php
    require_once "navigationbar.php";

?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .custom-select {
            position: relative;
        }
        .custom-select select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }
        .custom-select::after {
            content: '\25BC'; /* Unicode character for down arrow */
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            pointer-events: none;
            color: #4A5568; /* Tailwind's text-gray-700 */
        }
    </style>
    <script>
        function toggleInput(inputId) {
            var inputElement = document.getElementById(inputId);
            if (inputElement.style.display === 'none' || inputElement.style.display === '') {
                inputElement.style.display = 'block';
            } else {
                inputElement.style.display = 'none';
            }
        }

        function addPerson(inputId, listId) {
            var emailInput = document.getElementById(inputId);
            var email = emailInput.value;
            if (email) {
                var list = document.getElementById(listId);
                var listItem = document.createElement('div');
                listItem.className = 'flex items-center justify-between bg-gray-100 p-2 rounded mb-2';
                listItem.innerHTML = `
                    <span>${email}</span>
                    <button type="button" class="text-red-500 hover:text-red-700" onclick="removePerson(this)">Remove</button>
                `;
                list.appendChild(listItem);
                emailInput.value = '';
            }
        }

        function removePerson(button) {
            var listItem = button.parentElement;
            listItem.remove();
        }

        function createProject() {
            // Simulate project creation
            setTimeout(() => {
                var successMessage = document.getElementById('success-message');
                successMessage.style.display = 'block';
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 3000);
            }, 500);
        }
    </script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto">
        <!-- Create Project Section -->
        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h2 class="text-xl font-bold mb-4">Create Project</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="project-name">Project Name</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="project-name" type="text" placeholder="Enter project name">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="project-description">Project Description</label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="project-description" placeholder="Enter project description"></textarea>
                </div>
                <div id="supervisor-list" class="mb-4">
                    <div class="flex items-center justify-between bg-gray-100 p-2 rounded mb-2">
                        <span>supervisorA@example.com</span>
                        <button type="button" class="text-red-500 hover:text-red-700" onclick="removePerson(this)">Remove</button>
                    </div>
                </div>
                <div class="mb-4 flex items-center">
                    <button type="button" class="mr-2 text-gray-700 text-3xl font-bold focus:outline-none focus:shadow-outline" onclick="toggleInput('supervisor-input')">+</button>
                    <label class="text-gray-700" for="supervisor-email">Add Supervisor</label>
                </div>
                <div id="supervisor-input" class="mb-4" style="display: none;">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="supervisor-email" type="email" placeholder="Enter supervisor email">
                    <button type="button" class="mt-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="addPerson('supervisor-email', 'supervisor-list')">Add Supervisor</button>
                </div>
                <div id="cosupervisor-list" class="mb-4"></div>
                <div class="mb-4 flex items-center">
                    <button type="button" class="mr-2 text-gray-700 text-3xl font-bold focus:outline-none focus:shadow-outline" onclick="toggleInput('cosupervisor-input')">+</button>
                    <label class="text-gray-700" for="cosupervisor-email">Add Co-Supervisor</label>
                </div>
                <div id="cosupervisor-input" class="mb-4" style="display: none;">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cosupervisor-email" type="email" placeholder="Enter co-supervisor email">
                    <button type="button" class="mt-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="addPerson('cosupervisor-email', 'cosupervisor-list')">Add Co-Supervisor</button>
                </div>
                <div id="member-list" class="mb-4">
                    <div class="flex items-center justify-between bg-gray-100 p-2 rounded mb-2">
                        <span>member1@example.com</span>
                        <button type="button" class="text-red-500 hover:text-red-700" onclick="removePerson(this)">Remove</button>
                    </div>
                    <div class="flex items-center justify-between bg-gray-100 p-2 rounded mb-2">
                        <span>member2@example.com</span>
                        <button type="button" class="text-red-500 hover:text-red-700" onclick="removePerson(this)">Remove</button>
                    </div>
                </div>
                <div class="mb-4 flex items-center">
                    <button type="button" class="mr-2 text-gray-700 text-3xl font-bold focus:outline-none focus:shadow-outline" onclick="toggleInput('member-input')">+</button>
                    <label class="text-gray-700" for="member-email">Add Members</label>
                </div>
                <div id="member-input" class="mb-4" style="display: none;">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="member-email" type="email" placeholder="Enter member email">
                    <button type="button" class="mt-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="addPerson('member-email', 'member-list')">Add Member</button>
                </div>
                <div class="mb-4 flex items-center">
                    <label class="block text-gray-700 font-bold mb-2" for="start-date">Start Date</label>
                    <div class="relative ml-2">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="start-date" type="date">
                        <i class="fas fa-calendar-alt absolute top-2 right-3 text-gray-500"></i>
                    </div>
                    <label class="block text-gray-700 font-bold mb-2 ml-4" for="end-date">End Date</label>
                    <div class="relative ml-2">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="end-date" type="date">
                        <i class="fas fa-calendar-alt absolute top-2 right-3 text-gray-500"></i>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" onclick="createProject()">
                        Create Project
                    </button>
                </div>
            </form>
        </div>
        <!-- Success Message -->
        <div id="success-message" class="fixed inset-0 flex items-center justify-center" style="display: none;">
            <div class="bg-green-500 text-white py-2 px-4 rounded shadow-lg">
                Project created successfully!
            </div>
        </div>
    </div>
</body>
</html>
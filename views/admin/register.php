
<?php

require_once "navigationBar.php";

?>
        <!-- Main Content -->
        <div class="main">
            <div class="header">
                <div class="title">Register New Institute</div>
            </div>
            <div class="content1">
                <div class="form-container">
                    <h2>Register New Institute</h2>
                    <form id="registration-form">
                        <label for="institute-name">Institute Name</label>
                        <input type="text" id="institute-name" placeholder="Enter institute name" required>

                        <label for="address">Address</label>
                        <input type="text" id="address" placeholder="Enter address" required>

                        <label for="project-coordinator">Project Coordinator</label>
                        <input type="text" id="project-coordinator" placeholder="Enter project coordinator name" required>

                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Enter email" required>

                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="Enter password" required>

                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" placeholder="Re-enter password" required>

                        <button type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Dashboard</title>
    <link rel="stylesheet" href="../Stylesheets/Instructor.css"> <!-- Link to your CSS file -->
    
</head>
<body>

<header>
    <h1>Welcome to the Instructor Dashboard</h1>
</header>

<nav>
    <a href="logout.php">Logout</a>
    <a href="instructor_profile.php">Profile</a>
</nav>

<div class="container">
    <h2>Instructor Actions</h2>
    <p>Manage your courses and content below:</p>

    <a href="CreateCourse.php" class="button">Create New Course</a>
    <a href="UploadVideo.php" class="button">Upload Video</a>
    <a href="ManageCourses.php" class="button">Manage Courses</a>

    <h3>Your Courses</h3>
    <ul>
        <!-- Sample list of courses (this can be dynamically generated from the database) -->
        <li>Course 1: Introduction to Programming</li>
        <li>Course 2: Advanced Robotics</li>
        <li>Course 3: Web Development Basics</li>
    </ul>
</div>

</body>
</html>

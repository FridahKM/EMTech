<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Courses</title>
    <link rel="stylesheet" href="../Stylesheets/Instructor.css">
</head>
<body>

<header>
    <h1>Manage Your Courses</h1>
</header>

<div class="container">
    <h2>Course List</h2>
    <a href="CreateCourse.php" class="button">Add New Course</a>
    <table>
        <thead>
            <tr>
                <th>Course Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample course data (this can be dynamically generated from the database) -->
            <tr>
                <td>Introduction to Programming</td>
                <td>Learn the basics of programming using Python.</td>
                <td>Technology</td>
                <td>
                    <a href="edit_course.php?id=1" class="button edit-button">Edit</a>
                    <a href="delete_course.inc.php?id=1" class="button">Delete</a>
                </td>
            </tr>
            <tr>
                <td>Advanced Robotics</td>
                <td>Explore advanced concepts in robotics and automation.</td>
                <td>Engineering</td>
                <td>
                    <a href="edit_course.php?id=2" class="button edit-button">Edit</a>
                    <a href="delete_course.inc.php?id=2" class="button">Delete</a>
                </td>
            </tr>
            <tr>
                <td>Web Development Basics</td>
                <td>Build your first website using HTML, CSS, and JavaScript.</td>
                <td>Technology</td>
                <td>
                    <a href="edit_course.php?id=3" class="button edit-button">Edit</a>
                    <a href="delete_course.inc.php?id=3" class="button">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>

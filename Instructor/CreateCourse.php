<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Course</title>
    <link rel="stylesheet" href="../Stylesheets/Instructor.css">
</head>
<body>

<header>
    <h1>Create New Course</h1>
</header>

<div class="container">
    <form id="createCourseForm" action="create_course.inc.php" method="POST">
        <h2>Course Details</h2>
        
        <!-- Course Title -->
        <label for="courseTitle">Course Title:</label>
        <input type="text" id="courseTitle" name="courseTitle" required>

        <!-- Course Description -->
        <label for="courseDescription">Course Description:</label>
        <textarea id="courseDescription" name="courseDescription" rows="4" required></textarea>

        <!-- Course Category -->
        <label for="courseCategory">Course Category:</label>
        <select id="courseCategory" name="courseCategory" required>
            <option value="">Select a Category</option>
            <option value="Science">Science</option>
            <option value="Technology">Technology</option>
            <option value="Engineering">Engineering</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Arts">Arts</option>
        </select>

        <!-- Submit Button -->
        <button type="submit" name="create-course-submit">Create Course</button>
    </form>
</div>

</body>
</html>

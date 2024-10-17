<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video</title>
    <link rel="stylesheet" href="../Stylesheets/Instructor.css">
</head>
<body>

<header>
    <h1>Upload Video</h1>
</header>

<div class="container">
    <h2>Upload Video for Course</h2>
    <form action="upload_video.inc.php" method="POST" enctype="multipart/form-data">
        <label for="course_id">Select Course:</label>
        <select id="course_id" name="course_id" required>
            <option value="">Select a course</option>
            <!-- Populate this with PHP from the database -->
            <option value="1">Introduction to Programming</option>
            <option value="2">Advanced Robotics</option>
            <!-- More courses can be added dynamically -->
        </select>

        <label for="video_description">Video Description:</label>
        <textarea id="video_description" name="video_description" required></textarea>

        <label for="video_file">Upload Video File:</label>
        <input type="file" id="video_file" name="video_file" accept="video/*" required>

        <button type="submit" name="upload-video-submit">Upload Video</button>
    </form>

    <!-- Display messages if any -->
    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'emptyfields') {
            echo "<p style='color: red;'>Please fill in all fields.</p>";
        } elseif ($_GET['error'] == 'sqlerror') {
            echo "<p style='color: red;'>SQL Error. Please try again.</p>";
        }
    } elseif (isset($_GET['success'])) {
        if ($_GET['success'] == 'videosuccess') {
            echo "<p style='color: green;'>Video uploaded successfully!</p>";
        }
    }
    ?>
</div>

</body>
</html>

<?php
session_start();
include 'questions.php'; // question array is added to this file
$score = $_SESSION['score'];// final score of quiz is store in variable
session_destroy();// To start the new quiz we need to end this session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="results-container">
        <h1>Quiz Completed!</h1>
        <p>Your Score: <?php echo $score; ?>/<?php echo count($questions); ?></p> <!-- here count variable tracks the score -->
        <a href="index.php" class="restart-btn">Restart Quiz</a> <!-- this is for restarting the quiz-->
    </div>
</body>
</html>

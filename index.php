<?php
session_start(); 
$_SESSION['current_question'] = -1; /*it shows current question */
$_SESSION['score'] = 0;   /* initalize the  score */     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz Application</title>
    <link rel="stylesheet" href="style.css"> <!-- here css style sheet is linked-->
</head>
<body>
    <div class="container">
        <h1>Get ready for your quiz</h1>
        <form action="quiz.php" method="post"> <!--here the form data is sent by post method-->
            <button class="start-btn" type="submit">Start Quiz</button>
        </form>
    </div>
</body>
</html>

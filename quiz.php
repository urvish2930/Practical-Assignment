<?php
session_start();
include 'questions.php'; // questions are included

$currentQuestionIndex = $_SESSION['current_question']; // Fetch current question index

if ($_SERVER['REQUEST_METHOD'] === 'POST')// check the form is submited
 {
    // Check if the selected answer is correct
    if (isset($_POST['answer']) && $_POST['answer'] == $questions[$currentQuestionIndex]['answer']) {
        $_SESSION['score']++;
    }

    // Move to next question
    $_SESSION['current_question']++;

    // when quiz get completed redirect to result
    if ($_SESSION['current_question'] >= count($questions)) {
        header('Location: results.php');
        exit();
    }
}
// get current question on updated session
$currentQuestionIndex = $_SESSION['current_question'];
$currentQuestion = $questions[$currentQuestionIndex]; // Get the question
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css"><!-- here css style sheet is linked-->
</head>
<body>
    <div class="quiz-container">
        <h2>Question <?php echo $currentQuestionIndex + 1; ?> of <?php echo count($questions); ?></h2><!-- here current question is printed-->
        <form method="post" id="quiz-form">
            <p><?php echo $currentQuestion['text']; ?></p><!-- here current question is printed-->
            <?php foreach ($currentQuestion['options'] as $index => $option): ?><!-- here current option is printed -->
                <label>
                    <input type="radio" name="answer" value="<?php echo $index; ?>" required><!-- radio butten is given to select one correct answer-->
                    <?php echo $option; ?>
                </label><br>
            <?php endforeach; ?>
            <button type="submit" class="next-btn">Next</button><!-- it is a submit button-->
        </form>
    </div>
    <script src="script.js"></script><!-- external javascript is added-->
</body>
</html>

<?php
require_once('../helpers/init.php');

$topics = getTopics();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quiz = $_POST['quiz'];
    $topic = $_POST['topic'];

    // Call the addQuiz function
    addQuiz($quiz, $topic);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Quiz</title>
</head>

<body>
    <h1>Add Quiz</h1>

    <form action="/Quiz/quizzes.php" method="post">
        <label for="quiz">Quiz:</label><br>
        <textarea name="quiz" id="quiz" cols="30" rows="10"></textarea> <br><br>
        <label for="topic">Topic:</label><br>
        <select name="topic" id="topic">
            <?php
            foreach ($topics as $key => $value) {
                print '<option value="' . $value['tid'] . '">' . $value['topicName'] . '</option>';
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Add">
    </form>
</body>

</html>
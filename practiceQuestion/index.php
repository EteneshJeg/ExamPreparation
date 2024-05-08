<?php
require_once('../helpers/init.php');

$topics = getTopics();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $topic = $_POST['topic'];

    // Call the addPracticeQuestion function
    addPracticeQuestion($question, $answer, $topic);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Practice Question</title>
</head>

<body>
    <h1>Add Practice Question</h1>

    <form action="/practiceQuestion/index.php" method="post">
        <label for="question">Question:</label><br>
        <textarea name="question" id="question" cols="30" rows="10"></textarea> <br><br>
        <label for="answer">Answer:</label><br>
        <textarea name="answer" id="answer" cols="30" rows="10"></textarea> <br><br>
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
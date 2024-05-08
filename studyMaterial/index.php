<?php
require_once('../helpers/init.php');

$topics = getTopics();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $description = $_POST['description'];
    $materialUrl = $_POST['material_url'];
    $topic = $_POST['topic'];

    // Call the addStudyMaterial function
    addStudyMaterial($description, $materialUrl, $topic);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study material</title>
</head>

<body>
    <h1>Add Study Material</h1>

    <form action="/studyMaterial/index.php" method="post">
        <label for="material_url">Study Material URL:</label><br>
        <input type="text" name="material_url"><br><br>
        <label for="description">Description:</label><br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea> <br><br>
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
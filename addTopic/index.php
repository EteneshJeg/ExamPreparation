<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Topics</title>
</head>
<body>
    <h1>Add topic</h1>

    <form action="/addTopic/added.php" method="post">
        <label for="topicName">Topic name:</label><br>
        <input type="text" name="topicName"> <br><br>
        <input type="submit" value="Add topic">
    </form>
</body>
</html>
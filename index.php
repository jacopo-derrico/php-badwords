<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censorship</title>
</head>
<body>
    <h3>Choose a word to censor and a text</h3>

    <form action="result.php" method="POST">
        <input name="word" type="text" placeholder="Word to censor">
        <br>
        <textarea name="text" rows="8" cols="50" placeholder="Text"></textarea>
        <br>
        <input type="submit">
    </form>
</body>
</html>
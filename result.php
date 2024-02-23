<?php 
    $word = $_GET["word"];
    $text = $_GET["text"];
    $textLength = strlen($text);
    $censoredText = str_replace($word, "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censored result</title>
</head>
<body>
    <h4>Here is your text</h4>
    <p>Length: <?php echo $textLength ?></p>
    <p><?php echo $censoredText ?></p>
</body>
</html>
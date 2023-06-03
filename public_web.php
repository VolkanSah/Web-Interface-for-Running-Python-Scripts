<!DOCTYPE html>
<!-- Public web example, more secure than local.php -->
<html>
<head>
    <title>Python Script Interface</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="prompt">Prompt:</label>
        <input type="text" id="prompt" name="prompt" required>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Python-Skript aufrufen und Ergebnis abrufen
        $prompt = $_POST['prompt'];
        $result = shell_exec("python3 your_script.py \"$prompt\"");

        // Ergebnis anzeigen
        echo "<h3>Result:</h3>";
        echo "<pre>$result</pre>";
    }
    ?>
</body>
</html>

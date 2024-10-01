<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <h1>Generatore di Password Sicure</h1>

    <form method="GET" action="">
        <label for="length">Lunghezza Password:</label>
        <input type="number" id="length" name="length" min="1" max="100" required>
        <button type="submit">Genera Password</button>
    </form>

    <?php
    // includi functions
    include 'functions.php';

    // verifica se è stata richiesta la generazione della password con isset
    if (isset($_GET['length'])) {
        $length = intval($_GET['length']);
        if ($length > 0) {

            // generazione password 
            $generatedPassword = generatePassword($length);
            
            // mostra in pagina il risultato
            echo "<p>Password generata: <strong>$generatedPassword</strong></p>";
        } 
        else {
            echo "<p>Per favore, inserisci una lunghezza valida.</p>";
        }
    }
    ?>
</body>
</html>
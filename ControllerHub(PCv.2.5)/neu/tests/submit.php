<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = $_POST["feedback"];
    if (!empty($feedback)) {
        $file = fopen("c-log.txt", "a") or die("Datei konnte nicht geöffnet werden!");
        fwrite($file, $feedback . "\n");
        fclose($file);
        echo "Feedback wurde erfolgreich gespeichert!";
    } else {
        echo "Feedback ist leer!";
    }
} else {
    echo "Ungültige Anfrage!";
}
?>

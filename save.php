<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $steamid = trim($_POST["steamid"]);
    $punishment = trim($_POST["punishment"]);
    $evidence = trim($_POST["evidence"]);

    if (!empty($name) && !empty($steamid) && !empty($punishment) && !empty($evidence)) {
        $entry = date("Y-m-d H:i:s") . PHP_EOL .
                "Name: " . $name . PHP_EOL .
                "SteamID: " . $steamid . PHP_EOL .
                "Punishment: " . $punishment . PHP_EOL .
                "Evidence: " . $evidence . PHP_EOL .
                "------------------------------" . PHP_EOL;

        file_put_contents("logs.txt", $entry, FILE_APPEND);
        echo "Log saved!";
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request.";
}
?>

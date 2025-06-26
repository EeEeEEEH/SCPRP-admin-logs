<?php
$logs = file_exists("logs.txt") ? file("logs.txt") : [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Logs</title>
    <style>
        body {
            background-color: #222;
            color: white;
            font-family: sans-serif;
            padding: 20px;
        }
        .log-box {
            background-color: #333;
            border: 1px solid #555;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
        }
        pre {
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <h1>SCP-RP Admin Logs</h1>

    <?php
    // Group entries between dividers
    $entry = "";
    foreach ($logs as $line) {
        if (trim($line) === "------------------------------") {
            echo "<div class='log-box'><pre>" . htmlspecialchars($entry) . "</pre></div>";
            $entry = "";
        } else {
            $entry .= $line;
        }
    }
    ?>
</body>
</html>

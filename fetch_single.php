<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Medicine Inventory Management System</title>
</head>
<body>
    <pre>
    <?php
    // Select one row from the tabe medicines
    $stmt = $pdo->prepare("SELECT * FROM medicines LIMIT 1");
    if ($stmt->execute()) {
        // Fetch single row
        $row = $stmt->fetch();
        print_r($row);
    }
    ?>
    </pre>
</body>
</html>

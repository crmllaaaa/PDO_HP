<?php require_once 'core/dbConfg.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ITS -8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hospital Medicine Inventory Management System</title>
</head>
<body>
    <pre>

    
    <?php
    // select all data from table medicines 
    $stmt = $pdo->prepare("SELECT * FROM medicines");
    if ($stmt->execute()) {
        echo "<pre>";
        print_r($stmt->fetchAll());
    }
    ?>
    </pre>
</body>
<html>

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
    // ID of the user to delete
    $userId = 1; 

    //  delete statement
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    
    if ($stmt->execute([$userId])) {
        echo "Record deleted successfully.";
    } else {
        echo "Deleting record failed.";
    }
    ?>
    </pre>
</body>
</html>

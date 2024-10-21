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
    // User ID to update
    $userId = 3; 

    // New data 
    $newUsername = 'bianca';
    $newRole = 'staff';

    // Update statement
    $stmt = $pdo->prepare("UPDATE users SET username = ?, role = ? WHERE id = ?");
    
    if ($stmt->execute([$newUsername, $newRole, $userId])) {
        echo "Record updated successfully.";
    } else {
        echo "Updating record failed.";
    }
    ?>
    </pre>
</body>
</html>

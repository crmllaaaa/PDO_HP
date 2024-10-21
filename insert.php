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
    // insert new user
    $username = 'crmllaaaa';
    $password = password_hash('yanto123', PASSWORD_DEFAULT); // Hash the password
    $role = 'staff';

    //  insert statement
    $stmt = $pdo->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
    
    if ($stmt->execute([$username, $password, $role])) {
        echo "Insert Record successfully.";
    } else {
        echo "Insert Record failed.";
    }
    ?>
    </pre>
</body>
</html>


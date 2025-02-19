<?php
    header('Content-Type: application/json');
    require_once 'config/config.php';
    $user = $_POST['user'];
    $password = $_POST['password'];
    
    $conn = connectDB();
    
    if (userExists($conn, $user, $password)) {
        $response = [
            "success" => true,
            "user" => $user,
            "message" => "benvenuto ".$user
        ];
    } else {
        $response = [
            "success" => false,
            "message" => "Username o password errati!"
        ];
    }

    $conn->close();

    echo json_encode($response);
    
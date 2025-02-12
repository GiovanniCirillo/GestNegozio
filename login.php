<?php
    header('Content-Type: application/json');
    
    $user = $_POST['user'];
    $password = $_POST['password'];
    
    if ($user == "gio" && $password == "0000") {
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

    echo json_encode($response);
    
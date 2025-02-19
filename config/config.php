<?php
define("host", "localhost");
define("dbname", "5bsw");
define("userDB", "root");
define("passDB", "root");

function connectDB() {
    $conn = new mysqli(host, userDB, passDB, dbname);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
    return $conn;
}

function userExists($conn, $username, $password) {
    $stmt = $conn->prepare("SELECT username FROM utenti WHERE username = ? AND password = ? LIMIT 1");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->store_result();
    $exists = $stmt->num_rows > 0;
    $stmt->close();
    return $exists;
}
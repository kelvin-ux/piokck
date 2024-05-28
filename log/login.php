<?php
    include 'db.php';
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $sql = "SELECT * FROM uzytkownicy WHERE Email='$email'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['Haslo'])) {
                $_SESSION['user_id'] = $row['ID_uzytkownika'];
                header("Location: index.php");
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with that email.";
        }
    
        $conn->close();
    }
?>

<?php 
    include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO uzytkownicy (Email, Haslo) VALUES ('$email', '$password')";

    if($conn->query($sql) == TRUE)
    {
        echo "New user created";
    }
    else
    {
        echo "Error" . $sql . "<br>". $conn->error;
    }
    $conn->close();
}

?>

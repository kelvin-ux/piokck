<?php
session_start();
include '../log/db.php';  // Upewnij się, że ścieżka jest poprawna

// Sprawdzanie, czy użytkownik jest zalogowany
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo "Brak dostępu.";
    exit;
}

// Sprawdź, czy dane z formularza zostały przesłane
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sprawdź, czy przesłane dane zawierają ID ogłoszenia do usunięcia
    if (isset($_POST['delete_id'])) {
        $delete_id = $_POST['delete_id'];

        // Przygotowanie zapytania SQL do usunięcia ogłoszenia
        $delete_sql = "DELETE FROM ogloszenia WHERE ID_ogloszenia = ?";
        $delete_stmt = $mysqli->prepare($delete_sql);

        // Bindowanie parametrów
        $delete_stmt->bind_param("i", $delete_id);

        // Wykonanie zapytania usuwającego ogłoszenie
        if ($delete_stmt->execute()) {
            // Przekierowanie użytkownika na stronę z ogłoszeniami po usunięciu ogłoszenia
            header("Location: ../subsites/info.php");
            exit;
        } else {
            // Obsługa błędu w przypadku niepowodzenia zapytania
            echo "Wystąpił błąd podczas usuwania ogłoszenia.";
            exit;
        }

        // Zamknięcie zapytania
        $delete_stmt->close();
    } else {
        // Jeśli dane nie zawierają ID ogłoszenia do usunięcia, to oznacza, że są to dane do dodania nowego ogłoszenia

        // Przeczytaj dane z formularza
        $tytul = $_POST['tytul'];
        $opis = $_POST['Opis'];
        $zdjecie = $_POST['Zdjecie'];

        // Przygotowanie zapytania SQL do dodania ogłoszenia
        $insert_sql = "INSERT INTO ogloszenia (tytul, Opis, Zdjecie) VALUES (?, ?, ?)";
        $insert_stmt = $mysqli->prepare($insert_sql);

        // Bindowanie parametrów
        $insert_stmt->bind_param("sss", $tytul, $opis, $zdjecie);

        // Wykonanie zapytania
        if ($insert_stmt->execute()) {
            // Przekierowanie użytkownika na stronę z ogłoszeniami po dodaniu ogłoszenia
            header("Location: ../subsites/info.php");
            exit;
        } else {
            // Obsługa błędu w przypadku niepowodzenia zapytania
            echo "Wystąpił błąd podczas dodawania ogłoszenia.";
            exit;
        }

        // Zamknięcie zapytania
        $insert_stmt->close();
    }
}
?>

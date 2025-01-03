<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Poly</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<?php session_start();?>
<body <?php if($_SESSION['error'])echo'class="popup-open"' ?>>

<header>
    <nav>
        <ul class="nav-left">
            <li><a href="../index.php"><i class="fas fa-home"></i></a></li>
            <li><a href="../subsites/info.php">Ogłoszenia</a></li>
            <li><a href="../subsites/korepetycje.php">Korki</a></li>
            <li><a href="../subsites/metody.php">Metody Nauczanie</a></li>
        </ul>
        <ul class="nav-right">
            <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <li><a href="../subsites/edit.html">Edycja profilu</a></li>
                <li><a href="../log/logout.php">Wyloguj</a></li>
            <?php else: ?>
                <li><a href="#" id="login-btn">Logowanie</a></li>
                <li><a href="#" id="register-btn" class="sign-up">Rejestracja</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<?php
if($_SESSION['error']) {
    echo '<div id="error-popup" class="popup" style="display: block;">
    <div class="popup-content" >
        <span class="close-btn" id="close-error">&times;</span>';
        if($_SESSION['error']==1){
           echo '<h1>Hasło musi mieć minimum 8 znaków.</h1>';
        }elseif($_SESSION['error']==2){
            echo '<h1>Hasło musi zawierać co najmniej 1 liczbę.</h1>';
        }elseif($_SESSION['error']==3){
            echo '<h1>Hasło musi zawierać co najmniej 1 dużą literę.</h1>';
        }elseif($_SESSION['error']==4){
            echo '<h1>Hasło musi zawierać co najmniej 1 znak specjalny.</h1>';
        }elseif($_SESSION['error']==5){
            echo '<h1>Podane hasła nie są takie same!</h1>';
        }elseif($_SESSION['error']==6){
            echo '<h1>Imię musi mieć od 3 do 32 znaków.</h1>';
        }elseif($_SESSION['error']==7){
            echo '<h1>Nazwisko musi mieć od 3 do 32 znaków.</h1>';
        }elseif($_SESSION['error']==8){
            echo '<h1>Rok studiów musi być liczbą z zakresu od 1 do 12.</h1>';
        }

    echo'</div>
    </div>';
    $_SESSION['error']=0;
}
?>

    <div class="popup-content" style="display: flex;justify-content: space-evenly;">
        <div class="left-content">
            <h1>Profil</h1>
            <form action="../log/edit_profile.php" method="post">
                <label for="imie">Imię:</label>
                <input type="text" id="imie" name="imie" value="<?php echo $_SESSION['imie']; ?>" required>
                <label for="nazwisko">Nazwisko:</label>
                <input type="text" id="nazwisko" name="nazwisko" value="<?php echo $_SESSION['nazwisko']; ?>" required>
                <label for="rok_studiow">Rok studiów:</label>
                <input type="number" id="rok_studiow" name="rok_studiow" value="<?php echo $_SESSION['rok']; ?>" required>
                <label for="kierunek">Kierunek:</label>
                <input type="text" id="kierunek" name="kierunek" value="<?php echo $_SESSION['kierunek']; ?>" required>
                <button type="submit">Zastosuj zmiany</button>
            </form>
        </div>
        <div>
            <form method="POST" action="../log/edit_awatar.php" enctype="multipart/form-data" onsubmit="return validateFileSize()">

            <img src="../images/<?php
            if($_SESSION['awatar']==null){
                echo "avatar5.png";
            }
            else{
                echo $_SESSION['awatar'];
            }
            ?>" alt="Avatar" class="avatar" style="width: 300px; height: 300px;">
             <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" />
             </div>
            <button type="submit" name="upload">Zmień obraz awatara</button>
            </form>
        </div>
    </div>

<script>
    function validateFileSize() {
        var fileInput = document.querySelector('input[type="file"]');
        var maxFileSize = 2 * 1024 * 1024; // 2 MB

        if (fileInput.files.length > 0) {
            var fileSize = fileInput.files[0].size;
            if (fileSize > maxFileSize) {
                alert("Plik jest za duży. Maksymalny dozwolony rozmiar to 2 MB.");
                return false;
            }
        }
        return true;
    }
</script>

    <div class="popup-content">
        <h2>Hasło</h2>
        <form action="../log/edit_pswd.php" method="post">
            <label for="haslo">Hasło:</label>
            <input type="password" id="haslo" name="haslo" required>
            <label for="confirm_haslo">Potwierdź Hasło:</label>
            <input type="password" id="confirm_haslo" name="confirm_haslo" required>
            <button type="submit">Zmień hasło</button>
        </form>
    </div>
    <div class="popup-content">
        <h2>Korki</h2>
        <form id="addEditForm1" action="../log/dodaj_korki.php" method="post">
            <label for="tytul">Tytul</label>
            <input type="text" id="tytul" name="tytul" required>
            <label for="data">Data</label>
            <input type="date" id="data" name="data" required>
            <label for="miejscowosc">Miejscowosc</label>
            <input type="text" id="miejscowosc" name="miejscowosc" required>
            <label for="opis">Opis</label>
            <textarea id="opis" name="opis" rows="5" style="width:100%; margin-bottom: 10px"> </textarea>
            <label for="kontakt">Kontakt</label>
            <input type="text" id="kontakt" name="kontakt" required>
            <button type="submit">Dodaj/edytuj korki</button>
        </form>
        <label for="id_korkow">ID korkow</label>
        <form id="addEditForm2" action="#" method="post" onsubmit="return confirmSubmission();">
            <select class='nameItems' id="korki" name="selection">
                <option selected value></option>
                <?php
                $mysqli = new mysqli("localhost", "root", "", "kck_pio");

                $result = "SELECT * FROM korki WHERE ID_uzytkownika= ".$_SESSION['id'];
                $runquery = mysqli_query($mysqli,$result);
                while($row = mysqli_fetch_assoc($runquery)){
                    $val = $row['ID_korkow'];
                    echo '<option value="'.$row['ID_korkow'] .'"data-tytul="'.$row['Tytul'].'"data-date="'.$row['Data'].'"data-opis="'.$row['Opis'].'"data-kontakt="'.$row['Kontakt'].'"data-miejscowosc="'.$row['Miejscowość'].'">' . $row['ID_korkow'] . ' - '. $row['Tytul']. '</option>';
                }

                ?>
            </select>
            <button type="submit">Usuń korki</button>
        </form>
    </div>

<footer>&copy; 2024 Poly. All rights reserved</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const closeError = document.getElementById("close-error");
        const errorPopup = document.getElementById("error-popup");

        if (closeError) {
            closeError.addEventListener("click", function() {
                if (errorPopup) {
                    errorPopup.style.display = "none";
                    document.body.classList.remove("popup-open");
                }
            });
        }

        window.addEventListener("click", function(event) {
            if (event.target == errorPopup) {
                errorPopup.style.display = "none";
                document.body.classList.remove("popup-open");
            }
        });
    });
    $().ready(function() {
        $("#korki").change(function() {
            let selectedOption = $(this).find("option:selected");
            let idKorkow = selectedOption.val();
            let date = selectedOption.data("date");
            let opis = selectedOption.data("opis");
            let kontakt = selectedOption.data("kontakt");
            let miejscowosc = selectedOption.data("miejscowosc");
            let tytul = selectedOption.data("tytul");

            if (idKorkow) {
                $("#data").val(date);
                $("#opis").val(opis);
                $("#kontakt").val(kontakt);
                $("#miejscowosc").val(miejscowosc);
                $("#tytul").val(tytul);
                $("form#addEditForm1").attr("action", "../log/edit_korki.php?id=" + idKorkow);
                $("form#addEditForm2").attr("action", "../log/delete_korki.php?id=" + idKorkow);
            } else {
                $("#data").val('');
                $("#opis").val('');
                $("#kontakt").val('');
                $("#miejscowosc").val('');
                $("#tytul").val('');
                $("form#addEditForm1").attr("action", "../log/dodaj_korki.php");
                $("form#addEditForm2").attr("action", "#");

            }
        });
    });
    function confirmSubmission() {
        return confirm("Czy jesteś pewny że chcesz usunąć te korki?");
    }
</script>
</body>

</html>

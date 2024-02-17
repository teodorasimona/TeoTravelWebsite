
<?php
include "includes/header.php";
?>


    <h1 class="form header">Formular de gasire a abonatilor la NewsLetter </h1>

    <form action="selectie.php" method="POST">
        Nume: <input type="text" name="nume"><br> 
        Prenume: <input type="text" name="prenume"><br>

        <input type="reset" value="RENUNTA">
        <input type="submit" value="TRIMITE">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifică dacă variabilele sunt setate
        if (isset($_POST["nume"], $_POST["prenume"])) {
            // Conexiune la baza de date
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "demo";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Utilizează o instrucțiune pregătită pentru a preveni SQL injection
            $sql = "SELECT * FROM abonati WHERE nume=? AND prenume=?";
            $stmt = $conn->prepare($sql);

            // Leagă parametrii
            $stmt->bind_param("ss", $_POST["nume"], $_POST["prenume"]);

            // Execută interogarea
            $stmt->execute();

            // Obține rezultatul
            $result = $stmt->get_result();

            // Închide conexiunile
            $stmt->close();
            $conn->close();
        } else {
            // Mesaj de eroare pentru câmpurile goale
            $errorMessage = "Vă rugăm să completați ambele câmpuri ale formularului.";
        }
    }
    ?>


   
    <?php
    // Afișează rezultatele sau mesajul de eroare
    if (isset($result)) {
        if ($result->num_rows > 0) {
            // Afișează rezultatele
            ?>
            <div class="success-message">
                <p>Abonatul a fost găsit:</p>
                <table>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td>NUME CLIENT:</td>
                            <td><?php echo $row["nume"]; ?></td>
                        </tr>
                        <tr>
                            <td>PRENUME CLIENT:   </td>
                            <td><?php echo $row["prenume"]; ?></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><?php echo $row["email"]; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <?php
        } else {
            // Mesaj de eroare dacă nu există abonat
            ?>
            <div class="error-message">
                <p>Nu există abonat cu acest nume și prenume.</p>
            </div>
            <?php
        }
    } elseif (isset($errorMessage)) {
        // Mesaj de eroare pentru câmpurile goale
        ?>
        <div class="error-message">
            <p><?php echo $errorMessage; ?></p>
        </div>
        <?php
    }
    ?>




  <?php   
include "includes/footer.php";
?>

<?php
include "includes/header.php";
?>

    <?php
        // Conectare la baza de date
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "demo";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificare conexiune
        if ($conn->connect_error) {
            die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
        }

        // Răspunsul care va fi afișat pe pagină
        $responseMessage = '';

        // Verificare dacă butonul de submit a fost apăsat
        if (isset($_POST['submit'])) {
            // Verificare dacă sunt setate variabilele POST
            if (isset($_POST['nume'], $_POST['prenume'], $_POST['email'])) {
                // Obținere date din formular
                $nume = $_POST['nume'];
                $prenume = $_POST['prenume'];
                $email = $_POST['email'];

                // SQL pentru inserarea datelor în tabel
                $sql = "INSERT INTO abonati (nume, prenume, email) VALUES ('$nume', '$prenume', '$email')";

                // Executarea query-ului
                if ($conn->query($sql) === TRUE) {
                    $responseMessage = 'Datele au fost introduse cu succes!';
                } else {
                    $responseMessage = 'Eroare la introducerea datelor: ' . $conn->error;
                }
            }
        }

        // Închidere conexiune la baza de date
        $conn->close();
    ?>

    <?php if ($responseMessage !== ''): ?>
        <div class="success-message">
            <?php echo $responseMessage; ?>
        </div>
    <?php endif; ?>


    <form id="newsletterForm" action="index.php" method="post">
            <p style="text-align: center;">Aboneaza-te la Newsletter ca sa fii la curent cu ofertele!</p>
            <label for="nume">Nume:</label>
            <input type="text" id="nume" name="nume" required><br>

            <label for="prenume">Prenume:</label>
            <input type="text" id="prenume" name="prenume" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <button type="submit" name="submit" value="Trimite">Trimite</button>
    </form>

    


    
        <section class="main-presentation text-center container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-6">    
                    <h1>Bun venit la Teo Travel!</h1> 
                    <h2><small>Explorează Destinații Unice</small> </h2>
                    <p>Bucură-te de aventuri neașteptate și descoperă frumusețea lumii alături de Numele Site-ului. Suntem aici pentru a-ți oferi inspirație și informații utile pentru călătoriile tale. Indiferent dacă visezi la plaje exotice, aventuri montane sau explorarea culturilor fascinante, suntem ghidul tău de încredere în lumea călătoriilor.</p>
                    
                    <a href="http://localhost/demo/contact.php" style="background-color: transparent; color: gray;" type="button" class="btn btn-secondary"> Cere detalii</a>
                </div>    
            </div>
        </section>



    <section class="features text-center py-5">
        <div class="container">
            
            <div class="row ">     
                <div class="col-md-4 first-column">
                    <img alt="feature-image" class="first-image" src="https://i0.wp.com/nomadia-travel.com/wp-content/uploads/2022/07/Vacanta-in-europa-locuri-mai-putin-stiute.webp?fit=640%2C426&ssl=1">
                    <h4>Descopera locuri unice</h4>
                    <p class="feature-paragraph">Explorează destinații inedite și descoperă experiențe autentice, de la plaje pitorești la peisaje montane spectaculoase.</p>
                </div>
                <div class="col-md-4 col-sm-6 " >
                    <img alt="feature-image" class="second image" src="https://d11jxtftm29knk.cloudfront.net/images/blog/32/calatorie.jpg?t=1697612519">
                    <h4>Siguranta si relaxare</h4>
                    <p class="feature-paragraph">Asigură-ți o călătorie lipsită de griji, cu servicii de încredere și opțiuni pentru relaxare într-un mediu sigur și prietenos.</p>
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <img alt="feature-image" class="3rd image" src="https://www.wall-street.ro/image_thumbs/thumbs/06b/06bfa136c2e33ab7cc8f9840c261b37d-1063x560-00-86.jpg?v=1557929518">
                    <h4>Experiente culinare unice</h4>
                    <p class="feature-paragraph">Încântă-ți simțurile cu o varietate de arome și gusturi, explorând gastronomia locală în călătoriile tale.</p>
                </div>
            </div>       
        
            
        </div>

    </section>


        <!-- <section style="padding: 20px;" class="forcolumns container">
            <div class="row">
                <?php
                $x=0;
                $sir="Participanti la modulul";
                ?>

                <div style="text-align:center"  class=" prima-coloana col-md-6 col-lg-3">
                    <h3><?php
                    $a=654;
                    echo $a;?></h3>

                    <h3 style="font-size:15px; white-space:nowrap"><?php
                    $x++;
                    echo $sir . " " . $x;
                    ?>
                    </h3>
                    
                    

                </div>

                <div  style="text-align:center"  class=" a-doua-coloana col-md-6 col-lg-3">
                    <h3><?php
                    $b=109445;
                    $bFormatat=number_format($b,0,',','.');
                    print $bFormatat ;
                    ?></h3>

                    <h3 style="font-size:15px; white-space:nowrap; ">
                    <?php
                    $x++;
                    print $sir . " " .  $x;
                    ?>
                    </h3>
                    
                </div>

                <div style="text-align:center" class=" a-treia-coloana col-md-6 col-lg-3">
                    <h3><?php
                    $c=435346;
                    $numarFormatat= number_format($c,0,',','.');
                    print $numarFormatat;
                    ?></h3>

                    <h3 style="font-size:15px; white-space:nowrap;"><?php
                    $x++;
                    print $sir . " " . $x;
                    ?></h3>
                    
                </div>

                <div style="text-align:center;"  class="col-md-6 col-lg-3">
                    <h3><?php
                    $s=$a+$b+$c;
                    $sFormatat=number_format($s,0,',','.');
                    if($sFormatat<50.000)
                    print $sFormatat;
                    else
                    if($sFormatat>=50.000)
                    print "<strong>" . $sFormatat . "</strong>";
                    ?></h3>


                    
                    <h3 style="font-size:15px; white-space:nowrap; text-align:center;"><?php
                    print "Participanti in total";
                    ?></h3>
                </div>

            
            </div>
        </section> -->

    

<?php
include "includes/footer.php";
?>

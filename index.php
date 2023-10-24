

<?php
include "includes/header.php";
?>

  
    

        
    <div id="carouselExample" class="carousel slide">
        <div class="carousel">

        <div class="carousel-item active">
            <img src="https://anatolianpuzzle.com/cdn/shop/products/4553-0_1400x.jpg?v=1591940887" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-item">
            <img src="https://www.aesu.com/wp-content/uploads/2020/03/europe-4272297_640.jpg" class="d-block w-100" alt="...">
        </div>
        
        <div class="carousel-item">
            <img src="https://cdn1.matadornetwork.com/blogs/1/2021/07/Cafe-in-Venice-square-1200x854.jpg" class="d-block w-100" alt="...">
        </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>

    </div>



<section class="main-presentation text-center container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 col-lg-6">    
            <h1>Arta de a cauta informatii in Google!</h1> 
            <h2><small>Curs revolutionar</small> </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <button type="button" class="btn btn-primary">Inscrie-te acum</button>
            <button style="background-color: transparent; color: gray;" type="button" class="btn btn-secondary"> Cere detalii</button>
        </div>    
    </div>
</section>



<section class="features text-center py-5">
    <div class="container">
        
        <div class="row ">     
            <div class="col-md-4 first-column">
                <img class="first-image" src="https://www.roturistic.ro/img/user/Vama_Veche_Neata/Vama_Veche_Neata_1678733221.75122499.jpg">
                <h4>Performanta</h4>
                <p class="feature-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div class="col-md-4 col-sm-6 " >
                <img class="second image" src="https://www.zooplus.ro/ghid/wp-content/uploads/2020/10/pui-de-pisica-%C3%AEn-noua-cas%C4%83.webp">
                <h4>Siguranta in ziua de maine</h4>
                <p class="feature-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div class="col-md-4 col-sm-6 ">
                <img class="3rd image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Stroopwafels_01.jpg/1200px-Stroopwafels_01.jpg">
                <h4>Dublarea venitului</h4>
                <p class="feature-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
        </div>       
    
        
    </div>

</section>


<section class="forcolumns container">
    <div class="row">
        <?php
        $x=0;
        $sir="Participanti la modulul";
        ?>

        <div style="text-align:center;"  class=" prima-coloana col-md-6 col-lg-3">
            <h3><?php
            $a=654;
            echo $a;?></h3>

            <h3 style="font-size:15px; white-space:nowrap"><?php
            $x++;
            echo $sir . " " . $x;
            ?>
            </h3>
            
            

        </div>

        <div  style="text-align:center;"  class=" a-doua-coloana col-md-6 col-lg-3">
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

        <div style="text-align:center;" class=" a-treia-coloana col-md-6 col-lg-3">
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
</section>

<?php
include "includes/footer.php";
?>



<?php

try {
    $connexion = mysqli_connect( $host = 'localhost', $user = 'root', $password = '', $database = 'foodup' );
    
} catch (Exception $e) {

    die('Erreur : '.$e->getMessage());
}


?>


<div class="plat__contain__img">
                        <img src="assets/img/salade.jpg" alt="">
                    </div>

                    <div class="plat__contain__date">
                        <div class=`plat__contain__date__left`><img src="assets/img/calendar-solid-24.png" alt="">'.$donnee['date'].'</div>
                        <div class="plat__contain__date__right">
                            <div class="plat__contain__date__right__circle"><img src="assets/img/chef5.jpg" alt=""></div>
                            <div>'.$donnee['auteur'].'</div>
                        </div>
                    </div>

                    <div class="plat__contain__name">
                        <h3>'.$donnee['recipes'].'</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="plat__contain__btn">
                        <button><a href="./php/indSalad.php">Consult</button></a>
                        <div>
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                        </div>
                    </div>
                </div> ';






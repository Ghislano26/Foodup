<?php 
            // Connexion a la database
  
     try {
            $connexion =  new PDO('mysql:host=localhost;dbname=foodup', 'root', '');

    } catch (Exception $e) {

        die('Erreur : '.$e->getMessage());
    }

      // Récupération des Cuisiniers



    $reponse = $connexion->query('SELECT * FROM recettes ORDER BY date DESC');

    $donnees = $reponse->fetchAll();

?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&display=swap');


:root{
    --primary-color: #f57217;
    --font-IBM: 'IBM Plex Sans', sans-serif;
    --font-open-sans: 'Open Sans', sans-serif;
    --secondary-color: #aa4805;
    --text-color: #5b5a5a;
    --border-raduis: 1.2rem;
    --gradient: linear-gradient(140deg, rgba(0, 0, 0, 0.85)0%, rgba(0, 0, 0, 0.3));

}

*{
    margin: 0;
    padding: 0;
    border: none;
    box-sizing: border-box;
}
html{
    font-size: 10px;
}
body{
    overflow-x: hidden;
    margin: 0;
    padding: 0;
}
.Fluid_mouse{
    width: 5rem;
    height: 5rem;
    border-radius: 50%;
    background-color: var(--primary-color);
    position: absolute;
    transform: translate(-50%, -50%);
    transition: 0.05s ease-in;
    z-index: -999;
}
.head{
    background-color: rgb(239, 239, 240);
    width: 100vw;
    height: 5vh;
    display: flex;
    position: fixed;
    z-index: 1;
    top: 0;
}
.inkmail{
    text-decoration: none;
    color:  var(--body-color);
}
.head__id{
    display: flex;
    align-items: center;
    flex: 1;
    padding: 1rem;
    color: var(--body-color);
    font-size: 1.2rem;
}
.head__id p{
    font-family: var(--font-open-sans);
    color: var(--text-color);
}
.head__id img{
    width: 4rem;
    height: 4rem;
    margin-left: 2rem;
    padding: 1rem;
    cursor: pointer;
}
.head__reseau{
    display: flex;
    flex: 1;
    justify-content: space-evenly;
    align-items: center;
}
.head__reseau img{
    width: 2rem;
    height: 2rem;

}
.head__reseau__h3{
    font-family: var(--font-open-sans);
    color: var(--text-color);
    
}
.head__reseau__a{
    text-decoration: none;
    font-family: var(--font-IBM);
    color: var(--text-color);
    font-weight: bold;
    padding: 1.2rem 1rem 1.2rem 1rem;
}
main{
    width: 100%;
    height: 100vh;
    padding: 4rem;
}
.nav{
    width: 100%;
    height: 10vh;
    display: flex;
    background-color: rgba(255, 255, 255, .8);
}
.nav__logo{
    flex: 1;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    /* background-color: green; */
}
.nav__logo h1{
    font-size: 6.5rem;
}
.nav__logo span{
    font-size: 8rem;
    color: var(--primary-color);
}
.nav__link{
    flex: 2;
    display: flex;
    justify-content: space-around;
    align-items: center;
    z-index: 1;
    /* background-color: aqua; */
}
/* .recipes__hover{
    width: 15%;
    height: 20%;
    position: absolute;
    top: 10rem;
    left: 56.5rem;
    z-index: 1;
    display: flex;
    flex-direction: column;
    background-color: rgba(255, 255, 255, .9);
    justify-content: space-around;
    color: var(--secondary-color);
    overflow: hidden;
    padding: 2rem;
    visibility: hidden;
} */

.nav__link a{
   text-decoration: none;
   font-size: 2rem;
   color: var(--secondary-color);
   font-family: var(--font-open-sans);
   transition: 0.25s ease-out;
}
.nav__link a:hover{
    color: var(--primary-color);
    transform: scale(1.1);
    /* border-bottom: 2px solid var(--secondary-color); */
 }
.nav__btn{
    flex: 1;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    /* background-color: yellow; */
}
.nav__btn button{
    width: 15rem;
    height: 5rem;
    border-radius: var(--border-raduis);
    color: white;
    font-family: var(--font-open-sans);
    font-size: 1.6rem;
    background-color: var(--primary-color);
    cursor: pointer;
    transition: 0.25s ease;
    z-index: 1;
}
.nav__btn button:hover{
    transform: scale(1.1);
    background-color: var(--secondary-color);
}
.link_head{
    text-decoration: none;
    color: var(--text-color);
}

.header{
    margin-top: 8rem;
    width: 100%;
    height: 75%;
    background-image: var(--gradient), url("assets/img/bann.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: space-evenly;
    padding: 2rem;
    gap: 1rem;
    z-index: 1;
}
.header h1{
    font-size: 5.5rem;
    font-family: var(--font-IBM);
    color: white;
    font-weight: bolder;
}
.header p{
    font-size: 1.7rem;
    color: white;
    font-family: var(--font-open-sans);
}
.header__left{
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    /* background-color: yellow; */
}
.header__left span{
  color: var(--primary-color);
}
.header__right{
    flex: 1;
    /* background-color: red; */
}

.discover{
    margin-top: 6rem;
    width: 100%;
    height: 100%;
    /* background-color: red; */
    display: flex;
    flex-direction: column;
    gap: 4rem;
}
.discover__text{
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    /* background-color: black; */
}
.discover__text h1{
    color: var(--text-color);
    font-size: 4.3rem;
    font-weight: bold;
    font-family: var(--font-IBM);
}
.discover__text p{
    color: var(--text-color);
    font-size: 2.9rem;
    font-family: var(--font-open-sans);
}
.discover__img{
    flex: 3;
    gap: 8rem;
    display: flex;
    margin-top: 2rem;
}
.discover__img__left{
    flex: 1;
    background-image: url(assets/img/Group\ 2.svg);
    background-repeat: no-repeat;
    background-size: contain;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding-right: 1rem;
    /* background-color: var(--primary-color); */
    border-radius: 20px 450px 0 425px;
    background-color: pink;
}
.discover__img__left img{
    width: 30%;
    height: 40%;
    transition: 0.5s ease;
}
.discover__img__left img:hover{
    transform: rotate(110deg);
    cursor: pointer;
    
}
.discover__img__right{
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 3rem;
    padding: 2rem;
}
.discover__img__right__question h3{
   font-size: 2.5rem;
   text-transform: uppercase;
   font-family: var(--font-open-sans);
   color: var(--secondary-color);
}
.discover__img__right__response h1{
    font-size: 3.8rem;
    text-transform: uppercase;
    font-weight: bold;
    font-family: var(--font-open-sans);
    color: var(--text-color);
}
.discover__img__right__citation q{
   font-size: 2.2rem;
   font-family: var(--font-IBM);
}
.discover__img__right__note{
    gap: 2rem;
    display: flex;
}
.discover__img__right__circle{
    flex: 1;
    border-radius: 50%;
    display: flex;
    align-items: center;
    overflow: hidden;
    animation: rotate 3s linear infinite;
}
/* Animation photo */
@keyframes rotate{
    0%{
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
}


.discover__img__right__circle img{
   width: 100%;
   height: 100%;
}
.discover__img__right__circle img:hover{
   transform: scale(1.1);
   cursor: pointer;
   filter: brightness(70%);
}
.discover__img__right__circle__name{
    flex: 8;
    font-size: 1.5rem;
    font-family: var(--font-IBM);
}

.discover__img__right__start{
    font-size: 2.5rem;
}
#plat{
    width: 100%;
    height: 110%;
    margin-top: 20rem;

}
#plat h1{
    text-align: center;
    font-size: 4.5rem;
    font-family: var(--font-IBM);
    text-transform: uppercase;
    color: var(--text-color);
}
.plat__contain1{
    width: 100%;
    height: 85%;
    margin-top: 8rem;
    display: flex;
    justify-content: space-evenly;
    gap: 1rem;
}
.plat__contain{
    width: 30%;
    height: 90%;
    display: flex;
    flex-direction: column;
    box-shadow: 8px 8px 8px 8px gray;

}
.plat__contain__img{
    width: 100%;
    height: 250%;
    
}
.plat__contain__img img{
    width: 100%;
    height: 100%;
}
.plat__contain__img img:hover{
    transform: scale(1.1);
    filter: brightness(60%);
}
.plat__contain__date{
    width: 100%;
    padding: 2rem;
    display: flex;
    align-items: center;
    gap: 1rem;
}
.plat__contain__date__left{
    flex: 1;
    display: flex;
    align-items: center;
    gap: 1rem;
    font-size: 1.5rem;
    font-family: var(--font-open-sans);
}
.plat__contain__date__right{
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    font-size: 1.6rem;
    font-family: var(--font-open-sans);
}
.plat__contain__date__right__circle{
    width: 35%;
    border-radius: 50%;
    border: 1px solid orange;
    overflow-x: hidden;
    transition: 0.25s ease;
    overflow-y: hidden;
}
.plat__contain__date__right__circle img{
    width: 100%;
    height: 100%;
}
.plat__contain__date__right__circle img:hover{
    transform: scale(1.1);
    cursor: pointer;
}
.plats{
    width: 100%;
    height: 150rem;
    margin-top: 5rem;
    display: flex;
    gap: 3rem;
    flex-wrap: wrap;
    /* padding: 8rem; */
    padding-left: 8rem;
}
.plat__contain__name{
    width: 100%;
    padding: 2rem;
    display: flex;
    flex-direction: column;
    gap: 2rem;
}
.plat__contain__name h3{
    color: var(--primary-color);
    font-size: 3.5rem;
}
.plat__contain__name p{
    color: var(--text-color);
    font-size: 2.2rem;
}
.plat__contain__btn{
    width: 100%;
    height: 100%;
    padding: 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: -20rem;
}
.plat__contain__btn button{
    border-radius: var(--border-raduis);
    color: white;
    font-family: var(--font-open-sans);
    font-size: 2rem;
    background-color: var(--primary-color);
    cursor: pointer;
    transition: 0.25s ease;
    z-index: 1;
    width: 30%;
    height: 5rem;
    transition: 0.25s ease;
}
.plat__contain__btn button a{
   text-decoration: none;
   color: white;
}
.plat__contain__btn button a:hover{
    color: var(--primary-color);
}
.plat__contain__btn button:hover{
   background-color: white;
   border: 2px solid red;
   transform: scale(1.1);
}
.service{
    width: 100%;
    height: 55%;
    margin-top: 145rem;
    gap: 4rem;
    display: flex;
    flex-direction: column;
}
.service__text{
    width: 100%;
    display: flex;
    justify-content: center;
    font-size: 2.5rem;
    color: var(--text-color);
    font-family: var(--font-IBM);
}
.service__img{
    width: 100%;
    display: flex;
    justify-content: space-around;
}
.service__img h3{
   font-size: 2.2rem;
   font-family: var(--font-open-sans);
} 
.service__img p{
   font-size: 1.2rem;
   font-family: var(--font-open-sans);
} 
.service__img img{
    width: 20rem;
    height: 20rem;
    transition: 0.25s ease;
}
.service__img img:hover{
    transform: scale(1.1);
    cursor: pointer;
}
.presentation{
    width: 100%;
    height: 70%;
    margin-top: 6rem;
    background-color: rgb(5, 4, 22);
    display: flex;
}
.presentation__text{
    flex: 1;
    padding-left: 4rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.presentation__text h1{
    font-size: 4.5rem;
    color: red;
    font-family: var(--font-IBM);
}
.presentation__text__link{
    width: 100%;
    height: 20%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
.presentation__text a{
    padding: 1.5rem 3.5rem 1.5rem 3.5rem;
    border: 2px solid var(--primary-color);
    border-radius: 1.2rem;
    transition: 0.25s ease-out;
    text-decoration: none;
    font-size: 2rem;
    font-family: var(--titleHeadFont);
    color: white; 
}
.presentation__text a:hover{
    transform: scale(1.1);
    background-color: var(--primary-color);
    color: white;
    border: 2px solid white;
}
.presentation__img{
    flex: 1.3;
    display: flex;
    justify-content: center;
    align-items: flex-end;
}

/* Traitement du footer */

.footer{
    width: 100%;
    height: 70%;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
.footer h1{
    font-size: 2.3rem;
    margin-bottom: 3rem;
    font-family: var(--font-IBM);
}
.footer li{
    font-size: 1.8rem;
    margin-bottom: 2.1rem;
    font-family: var(--font-open-sans);
    list-style-type: none;
} 

/* Fin du traitement du footer */
/* Traitement de la section finale */

.end{
    width: 100%;
    height: 30%;
}
.end__text{
    display: flex;
    padding-left: 6rem;
    padding-right: 6rem;
    justify-content: space-between;
    align-items: center;;
}
.end__text h2{
    font-size: 1.8rem;
    font-family: var(--font-open-sans);
}
.end__text span{
    color: var(--primary-color);
}
.end__reseaux img{
    margin-left: 1rem;
    width: 2.5rem;
    height: 2.5rem;
    cursor: pointer;
}
.end__message{
    font-size: 1.3rem;
    display: flex;
    align-items: center;
    padding: 5rem;
    font-family: var(--font-IBM);
}
.linkart{
    width: 25%;
    display: flex;
    align-content: center;
    justify-content: space-evenly;
    margin-top: 2rem;
}
.linkart a{
    font-size: 1.5rem;
    text-decoration: none;
    color: var(--primary-color);
    font-family: var(--font-open-sans);
}
.linkart a:hover{
    /* transform: translateX(2px);
    transform: translateY(2px); */
    transform: scale(1.1);

}
.zoom:hover{
    transform: scale(1.1);
    filter: brightness(60%);
    cursor: pointer;
}
.texte:hover{
    display: block;
}
/* Fin de la section end */


</style>
<body>
    <!-- mouvement de la souris -->
        <div class="Fluid_mouse"></div>
</div> 
<!-- Petite entete description -->
    <div class="head">
<!-- Espace contacts et mail -->
        <div class="head__id">
            <img src="assets/img/Ellipse 1.png" alt="">
            <a href="mailto:ghislainatebachouacha@gmail.com" class="inkmail"><p>Phone (+237) 6808 786 40</p></a>
            <img src="assets/img/mail.png" alt="">
            <a href="mailto:ghislainatebachouacha@gmail.com" class="inkmail"><p>ghislainatebachouacha@gmail.com</p></a>
        </div>
<!-- Espace resseaux sociaux -->
        <div class="head__reseau">
            <h3 class="head__reseau__h3">Stay Connected</h3>
            <a href="mailto:ghislainatebachouacha@gmail.com" title="Suivez moi sur facebook "><img src="assets/img/facebook.png" alt=""></a>
            <a href="mailto:ghislainatebachouacha@gmail.com" title="Suivez moi sur twitter"><img src="assets/img/instagram.png" alt=""></a>
            <a href="mailto:ghislainatebachouacha@gmail.com" title="Suivez moi sur instagram"><img src="assets/img/linkedin.png" alt=""></a>

            <a href="mailto:ghislainatebachouacha@gmail.com" class="head__reseau__a">GET A QUOTE</a>
        </div>

    </div>


    <main>
        <nav class="nav">
            <div class="nav__logo">
                <a href="" class="link_head"><h1>Food<span>Up</span></h1></a>
            </div>
            <div class="nav__link">
                <a href="#">Home</a>
                <a href="#plat">Recipes</a>
                <!-- <div class="recipes__hover">
                 <a href="#">Model recipes</a>
                 <a href="#">Food actu</a>
                 <a href="#">Others</a>
                </div> -->
                <a href="#">Features</a>
                <a href="#">Events</a>
                <a href="#">Shortcodes</a>
            </div>
            <div class="nav__btn">
               <a href="connect.html"> <button>Sign In</button> </a>
            </div>
        </nav>

        <header class="header">

            <div class="header__left">
                <h1>Which <span>meal</span> do you want <span>?</span></h1>
                <div class="header__left__text">
                    <p>


                    <marquee behavior="" direction="">
                        <img src="assets/img/Star 1.png" alt="logo">
                        <img src="assets/img/Star 1.png" alt="logo">
                        <img src="assets/img/Star 1.png" alt="logo">
                        <img src="assets/img/Star 1.png" alt="logo">
                        <img src="assets/img/Star 1.png" alt="logo">
                        <img src="assets/img/Star 1.png" alt="logo">
                        <img src="assets/img/Star 1.png" alt="logo">
                        <img src="assets/img/Star 1.png" alt="logo">
                        <img src="assets/img/Star 1.png" alt="logo">
                        <img src="assets/img/Star 1.png" alt="logo">
                        <img src="assets/img/Star 1.png" alt="logo">
                    </marquee>
                        Lorem ipsum dolor sit ametlit. Ex tempore fugit, rerum doloribus praesentium aliquid!
                        Eum faperiam ullam architecto doloribus officiis quos voluptatum, facilis modi conseq.
                        Eum fuga consectetur eius aperiam ullam architecto doloribuvoluptatum, facilis modins.
                        
                    </p>
                    <div class='linkart'>
                        <a href="">Join the community </a><img src="assets\img\linkart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="header__right">
            
            </div>

        </header>
        
        <section class="discover">
            <div class="discover__text">
                <h1>The FoodUp site contains all the recipes of your favorites dishes</h1>
                <p>Concocted by our culinary experts</p>
            </div>

            <div class="discover__img">

                <div class="discover__img__left">
                    <img src="assets/img/pomme.png" alt="">
                </div>

                <!-- creqtion du content droit -->
                <div class="discover__img__right">

                    <div class="discover__img__right__question">
                        <h3>What they say</h3>
                    </div>

                    <div class="discover__img__right__response">
                       <h1>What Our Customers Say About Us</h1>
                    </div>

                    <div class="discover__img__right__citation">
                        <q>
                            FoodUp is the best.Lorem ipsum dolor sit ametlit. praesentium aliquid!
                            Eum faperiam  best Ex tempore fugit, rerum doloribus praesentium aliquid!
                            
                        </q>
                    </div>

                    <div class="discover__img__right__note">
                        <div class="discover__img__right__circle">
                            <img src="assets/img/Ellipse 1.png" alt="">
                        </div>

                        <div class="discover__img__right__circle__name">
                            <h2>Ghislain Ateba</h2>
                            <p>Food Customers</p>
                        </div>
                    </div>

                    <div class="discover__img__right__start">
                        <img src="assets/img/Star 1.png" alt="">
                        <img src="assets/img/Star 1.png" alt="">
                        <img src="assets/img/Star 1.png" alt="">
                        <img src="assets/img/Star 1.png" alt="">
                        <span>4.8</span>
                    </div>

                </div>

            </div>
        </section>










        <section id="plat">
            <h1>choose from our dishes</h1>
            <section class='plats'>
                <?php 
                    foreach($donnees as $donnee)

                    
                        echo '<article style="background-color: white; color: black; width: 30%; height: 40%; box-shadow: 3px 3px 2px 2px black, -1px 1px 1px 1px black">
                                <div style="color: white; width: 100%; height: 40%; overflow: hidden; z-index: 99;">
                                        <h3 class="texte" style=" display: none; position: absolute; margin-left: 8rem; margin-top: 8rem; color: white; font-size: 5rem;">See Recipes</h3>
                                        <img src="assets/img/'.$donnee['vue'].' " style="width: 100%; height: 100%;" class="zoom">
                                </div>

                                <div style="background-color: orange; color: white; width: 100%; height: 10%; display: flex; gap: 12rem;">
                                        <div style=" width: 50%; height: 100%; display: flex; align-items: center; font-size: 1.5rem;"><img src="assets/img/calendar-solid-24.png" alt="">'.$donnee['date'].'</div>

                        
                                        <div style=" width: 50%; height: 100%; display: flex; align-items: center; justify-content: space-evenly; font-size: 2rem;">
                                            <div class="plat__contain__date__right__circle"><img src="assets/img/chef5.jpg" alt=""></div>
                                                <div>'.$donnee['auteur'].'</div>
                                            </div>
                                        </div>
                                </div>
                                <div class="plat__contain__name">
                                    <h3>'.$donnee['recipes'].'</h3>
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




                             </article>

                        
                        
                        
                        '
                
                    

        

                ?>
            </section>


                <!-- <div class="plat__contain">

                    <div class="plat__contain__img">
                        <img src="assets/img/ndole.jfif" alt="">
                    </div>

                    <div class="plat__contain__date">
                        <div class="plat__contain__date__left"><img src="assets/img/calendar-solid-24.png" alt="">25 May 2023</div>
                        <div class="plat__contain__date__right">
                            <div class="plat__contain__date__right__circle"><img src="assets/img/chef4.jpg" alt=""></div>
                            <div>Delice Mbongo</div>
                        </div>
                    </div>

                    <div class="plat__contain__name">
                        <h3>Salad with fries</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="plat__contain__btn">
                        <button><a href="./php/ndole.php">Consult</button></a>
                        <div>
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="plat__contain">

                    <div class="plat__contain__img">
                        <img src="assets/img/pd.jfif" alt="">
                    </div>

                    <div class="plat__contain__date">
                        <div class="plat__contain__date__left"><img src="assets/img/calendar-solid-24.png" alt="">25 May 2023</div>
                        <div class="plat__contain__date__right">
                            <div class="plat__contain__date__right__circle"><img src="assets/img/chef8.jpg" alt=""></div>
                            <div>Delice Mbongo</div>
                        </div>
                    </div>

                    <div class="plat__contain__name">
                        <h3>Salad with fries</h3>
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
                </div>

            </div> -->

                    <!-- deuxieme bloc image -->

            <!-- <div class="plat__contain1">
                <div class="plat__contain">

                    <div class="plat__contain__img">
                        <img src="assets/img/poulet.jpg" alt="">
                    </div>

                    <div class="plat__contain__date">
                        <div class="plat__contain__date__left"><img src="assets/img/calendar-solid-24.png" alt="">25 May 2023</div>
                        <div class="plat__contain__date__right">
                            <div class="plat__contain__date__right__circle"><img src="assets/img/chef4.jpg" alt=""></div>
                            <div>Delice Mbongo</div>
                        </div>
                    </div>

                    <div class="plat__contain__name">
                        <h3>Salad with fries</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="plat__contain__btn">
                        <button><a href="./php/poulet.php">Consult</button></a>
                        <div>
                            <img src="assets/img/Star 1.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="plat__contain">

                    <div class="plat__contain__img">
                        <img src="assets/img/spaghetti.jpg" alt="">
                    </div>

                    <div class="plat__contain__date">
                        <div class="plat__contain__date__left"><img src="assets/img/calendar-solid-24.png" alt="">25 May 2023</div>
                        <div class="plat__contain__date__right">
                            <div class="plat__contain__date__right__circle"><img src="assets/img/perso1.jpg" alt=""></div>
                            <div>Delice Mbongo</div>
                        </div>
                    </div>

                    <div class="plat__contain__name">
                        <h3>Salad with fries</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="plat__contain__btn">
                        <button><a href="./php/indSalad.php">Consult</button></a>
                        <div>
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="plat__contain">

                    <div class="plat__contain__img">
                        <img src="assets/img/salade.jpg" alt="">
                    </div>

                    <div class="plat__contain__date">
                        <div class="plat__contain__date__left"><img src="assets/img/calendar-solid-24.png" alt="">25 May 2023</div>
                        <div class="plat__contain__date__right">
                            <div class="plat__contain__date__right__circle"><img src="assets/img/chef8.jpg" alt=""></div>
                            <div>Delice Mbongo</div>
                        </div>
                    </div>

                    <div class="plat__contain__name">
                        <h3>Salad with fries</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="plat__contain__btn">
                        <button><a href="./php/indSalad.php">Consult</button></a>
                        <div>
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                        </div>
                    </div>
                </div>

            </div>

            <div class="plat__contain1">
                <div class="plat__contain">

                    <div class="plat__contain__img">
                        <img src="assets/img/poulet.jpg" alt="">
                    </div>

                    <div class="plat__contain__date">
                        <div class="plat__contain__date__left"><img src="assets/img/calendar-solid-24.png" alt="">25 May 2023</div>
                        <div class="plat__contain__date__right">
                            <div class="plat__contain__date__right__circle"><img src="assets/img/chef4.jpg" alt=""></div>
                            <div>Delice Mbongo</div>
                        </div>
                    </div>

                    <div class="plat__contain__name">
                        <h3>Salad with fries</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="plat__contain__btn">
                        <button><a href="./php/poulet.php">Consult</button></a>
                        <div>
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="plat__contain">

                    <div class="plat__contain__img">
                        <img src="assets/img/spaghetti.jpg" alt="">
                    </div>

                    <div class="plat__contain__date">
                        <div class="plat__contain__date__left"><img src="assets/img/calendar-solid-24.png" alt="">25 May 2023</div>
                        <div class="plat__contain__date__right">
                            <div class="plat__contain__date__right__circle"><img src="assets/img/perso1.jpg" alt=""></div>
                            <div>Delice Mbongo</div>
                        </div>
                    </div>

                    <div class="plat__contain__name">
                        <h3>Salad with fries</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="plat__contain__btn">
                        <button><a href="./php/indSalad.php">Consult</button></a>
                        <div>
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="plat__contain">

                    <div class="plat__contain__img">
                        <img src="assets/img/salade.jpg" alt="">
                    </div>

                    <div class="plat__contain__date">
                        <div class="plat__contain__date__left"><img src="assets/img/calendar-solid-24.png" alt="">25 May 2023</div>
                        <div class="plat__contain__date__right">
                            <div class="plat__contain__date__right__circle"><img src="assets/img/chef3.jpg" alt=""></div>
                            <div>Delice Mbongo</div>
                        </div>
                    </div>

                    <div class="plat__contain__name">
                        <h3>Salad with fries</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="plat__contain__btn">
                        <button><a href="./php/indSalad.php">Consult</button></a>
                        <div>
                            <img src="assets/img/Star 1.png" alt="">
                            <img src="assets/img/Star 1.png" alt="">
                        </div>
                    </div>
                </div>

            </div>

        </section> -->

        <section class="service">

                <div class="service__text">
                    <h1>Your Favorite Recipes Are Made By Our Experts</h1>
                </div>

                <div class="service__img">
                    <div>
                        <img src="assets/img/call.jpg" alt=""><br><br>
                        <div><h3>Easy to order</h3></div>
                        <div><p>You only need a few steps in orderling</p></div>
                    </div>

                    <div>
                        <img src="assets/img/service.jpg" alt=""><br><br>
                        <div><h3>Help distributes</h3></div>
                        <div><p>You only need a few steps in orderling</p></div>
                    </div>

                    <div>
                        <img src="assets/img/serveur.jpg" alt=""><br><br>
                        <div><h3>Best quality</h3></div>
                        <div><p>You only need a few steps in orderling</p></div>
                    </div>
                </div>

        </section>


        <section class="presentation">
                <div class="presentation__text">
                    <div>
                        <h1 style="color: white;">Voted for our modern recipe site to join us</h1>
                    </div>
                   <div class="presentation__text__link">
                    <a href="#">Join Now</a>
                   </div>
                </div>

                <div class="presentation__img">
                    <img src="assets/img/chef6.png" alt="ImageCollection">
                </div>
        </section>

        

        <footer class="footer">
            <!-- cette div est uniquement pour la liste categorie -->
                        <div class="fooeter__listCategorie">
                            <h1 style="font-size: 2rem;"><img src="assets/img/Fast Cart.jpg" alt="world">  Categories</h1>
                            <li>User Interfaces</li>
                            <li>User Experiences</li>
                            <li>Digital Media</li>
                            <li>Lifestyle</li>
                            <li>Programming</li>
                            <li>Animation</li>
                        </div>
            <!-- Cette div est uniquement pour la liste product -->
                        <div class="fooeter__listProduct">
                            <h1 style="font-size: 2rem;"><img src="assets/img/user-regular-24.png" alt="world">  Product</h1>
                            <li>Precing</li>
                            <li>Overview</li>
                            <li>Browse</li>
                            <li>Accessibility</li>
                            <li>Five</li>
                            <li>Changelog</li>
                        </div>
            <!-- Cette div est uniquement pour la liste solutions -->
                        <div class="fooeter__listSolution">
                            <h1 style="font-size: 2rem;"><img src="assets/img/3-01.jpg" alt="world">  Solutions</h1>
                            <li>Brainstorming</li>
                            <li>Ideation</li>
                            <li>Wireframing</li>
                            <li>Research</li>
                            <li>Design</li>
                            <li>Concept</li>
                        </div>
            <!-- Cette div est uniquement pour la liste ressource -->
                        <div class="fooeter__listRessources">
                            <h1 style="font-size: 2rem;"><img src="assets/img/6-07 1.jpg" alt="world">  Ressources</h1>
                            <li>Help center</li>
                            <li>Blog</li>
                            <li>Tutorials</li>
                            <li>FAQs</li>
                            <li>Community</li>
                            <li>Events</li>
                        </div>
            <!-- Cette div est uniquement pour la liste support -->
                        <div class="fooeter__listSupport">
                            <h1 style="font-size: 2rem;"><img src="assets/img/28-15.jpg" alt="world">  Support</h1>
                            <li>Contacts Us</li>
                            <li>Developers</li>
                            <li>Documentation</li>
                            <li>Integrations</li>
                            <li>Reports</li>
                            <li>Webinar</li>
                        </div>
            <!-- Cette div est uniquement pour la liste company -->
                        <div class="fooeter__listCompany">
                            <h1 style="font-size: 2rem;"><img src="assets/img/2450 1.jpg" alt="world">  Campany</h1>
                            <li>About</li>
                            <li>Press</li>
                            <li>Events</li>
                            <li>Careers</li>
                            <li>Customers</li>
                            <li>Partners</li>
                        </div>
            
                    </footer>
                    <hr class="footer_line">
            <!-- Fin du footer -->
            
                    <section class="end">
                        <div class="end__text">
                            <h2>@ 2023 Food<span>Up</span>, Inc. All rights reserved.</h2>
                          <div class="end__reseaux">
                            <img src="assets/img/facebook.png" alt="youtube">
                            <img src="assets/img/instagram.png" alt="facebook">
                            <img src="assets/img/linkedin.png" alt="twitter">
                            <img src="assets/img/chercher 1.jpg" alt="instagram">
                            <img src="assets/img/github (1) 1.jpg" alt="linkedin">
                          </div>
                        </div>
            
                        <div class="end__message">
                            <p>
                                In sed posuere sed ullamcorper feugiat. Lacinia elit neque, ipsum, non. Tellus mattis enim volutpat habitasse. Semper posuere lectus consectetur aliquam et ullamcorper. Dictumst aenean justo fames diam eget volutpat vestibulum elit. 
                                Blandit aliquet bibendum pellentesque turpis id penatibus faucibus id nunc. Aenean rhoncus, erat pellentesque eu. Quis morbi condimentum phasellus in ultricies eu amet.
                            </p>
                        </div>
            
                    </section>
            <!-- Fin du developpement du site -->





    </main>


    <script>
        const mouve = document.querySelector(".Fluid_mouse");
        window.addEventListener("mousemove", function(e) {
            
            mouve.style.left = e.pageX + "px";
            mouve.style.top = e.pageY + "px";
        })
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminboard.css">
    <title>Document</title>
</head>
<body>
    
    
 <!-- mouvement de la souris -->
 <div class="Fluid_mouse"></div>
</div> 
<!-- Petite entete description -->
    <div class="head">
<!-- Espace contacts et mail -->
        <div class="head__id">
            <img src="../assets/img/phonetel.png" alt="">
            <a href="mailto:ghislainatebachouacha@gmail.com" class="inkmail"><p>Phone (+237) 6808 786 40</p></a>
            <img src="../assets/img/mail.png" alt="">
            <a href="mailto:ghislainatebachouacha@gmail.com" class="inkmail"><p>ghislainatebachouacha@gmail.com</p></a>
        </div>
<!-- Espace resseaux sociaux -->
        <div class="head__reseau">
            <h3 class="head__reseau__h3">Stay Connected</h3>
            <a href="mailto:ghislainatebachouacha@gmail.com" title="Suivez moi sur facebook "><img src="../assets/img/facebook.png" alt=""></a>
            <a href="mailto:ghislainatebachouacha@gmail.com" title="Suivez moi sur twitter"><img src="../assets/img/instagram.png" alt=""></a>
            <a href="mailto:ghislainatebachouacha@gmail.com" title="Suivez moi sur instagram"><img src="../assets/img/linkedin.png" alt=""></a>

            <a href="mailto:ghislainatebachouacha@gmail.com" class="head__reseau__a">GET A QUOTE</a>
        </div>

    </div>


    <main>
        <nav class="nav">
            <div class="nav__logo">
                <a href="" class="link_head"><h1>Food<span>Up</span></h1></a>
            </div>
            <div class="nav__link">
                <a href="../index.php">Home</a>
                <a href="../index.php#plat">Recipes</a>
                <!-- <div class="recipes__hover">
                 <a href="#">Model recipes</a>
                 <a href="#">Food actu</a>
                 <a href="#">Others</a>
                </div> -->
                <!-- <a href="#">Features</a>
                <a href="#">Events</a>
                <a href="#">Shortcodes</a> -->
            </div>
            <div class="nav__btn">
            <a href="../connect.html"><button> Se Deconnecter</button></a>
            </div>
        </nav>
    <section class="admin">
            <div class="admin__img">
                <img src="../assets/img/plat1.png" alt="">
            </div>
            <h1>Welcome Chefs Of FoodUp</h1>
    </section>

    <section class="options">
         

            <div class="options__voir">
                    <div class="options__cuisinier__chief">
                        <div>
                            <img src="../assets/img/chef8.jpg" alt="">
                        </div>
                        <div>
                            <a href="../php/addRecipesOnDataBase.php"><input type="submit" value="Add recipes"></a>
                        </div>
                    </div>
            </div>

            <div class="options__supprimer">
                    <div class="options__cuisinier__chief">
                        <div>
                            <img src="../assets/img/perso2.jpg" alt="">
                        </div>
                        <div>
                        <form action="deleteRecipes.php" method="post">
                            <input type="submit" value="See recipes">
                        </form>
                            
                        </div>
                    </div>
            </div>
    </section>


    <section class="formulaire" id="formChefAdd">
        <div class ="note">
            <div class="notice">
                <h3>Add Chief</h3>
            </div>
        </div>
        <form action="addChefOnDataBase.php" method="post">
            <h1>Add a chief on Food<span>Up</span></h1>

            <div class="form__name">
                    <label for="name">Name</label> <br><br>
                    <input type="text" id="name" name="name" placeholder="****name" required autocomplete="off">
            </div>

            <div class="form__lastname">
                    <label for="lastname">Lastname</label> <br><br>
                    <input type="text" id="lastname" name="lastname" placeholder="****lastname" required autocomplete="off">
            </div>

            <div class="form__email">
                    <label for="mail">E-mail</label> <br><br>
                    <input type="mail" id="mail" name="mail" placeholder="****ghislano26@gmail.com" required autocomplete="off">
            </div>

            <div class="form__age">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" placeholder="****age" required autocomplete="off">
            </div>

            <div class="form__sexe">
                    <div>
                        <label for="homme">M</label>                 <input type="checkbox" name="homme" id="homme">
                    </div>
                    <div>
                        <label for="homme">F</label>                 <input type="checkbox" name="femme" id="femme">
                    </div>
            </div>

            <div class="form__country">
                <label for="country">Country</label>
                <select name="country" id="country">
                    <optgroup label="Africa">
                        <option value="*****" seleted>*****</option>
                        <option value="cameroon">Cameroon</option>
                        <option value="Nigerian">Nigerian</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Congo">Congo</option>
                        <option value="Lybie">Lybie</option>
                    </optgroup>

                    <optgroup label="Europe">
                        <option value="France">France</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Italy">Italy</option>
                        <option value="Espagne">Espagne</option>
                        <option value="Grece">Grece</option>
                    </optgroup>

                    <optgroup label="America">
                        <option value="Brazil">Brazil</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Colombie">Colombie</option>
                        <option value="Costa rica">Costa rica</option>
                        <option value="Equator">Equator</option>
                    </optgroup>

                    <optgroup label="Asie">
                        <option value="Japon">Japon</option>
                        <option value="Chine">Chine</option>
                        <option value="Coree du nord">Coree du nord</option>
                        <option value="Coree du sud">Coree du sud</option>
                        <option value="Inde">Inde</option>
                    </optgroup>
                </select>
            </div>
                



            <div class="form__choise">
                    <input type="submit" value="Add">
            </div>


    </section>















    


















    














           
   

    </main>


    <script src="../js/adchief.js"></script>
    <script src="../js/addRecipes.js"></script>
</body>
</html>

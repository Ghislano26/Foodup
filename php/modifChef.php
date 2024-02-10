<?php 


     $connexion = new PDO('mysql:host=localhost;dbname=foodup', 'root', '');
         
 
 
     $test = $connexion->prepare('SELECT * FROM chiefs WHERE id=:num');
 
     $test->bindValue(':num', $_GET['numChefModif'], PDO::PARAM_INT);
 
     $test->execute();


     $mod  = $test->fetch();
    
     

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



<style>
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


#formChefAdd{
    animation: speed 2s ease;
}
@keyframes speed {
    0% {
    transform: translateY(500px);
  }
  100% {
    transform: translateX(0px);
  }
}

.formulaire{
    width: 80%;
    margin: 0 auto;
    height: 120%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 2rem;
    flex-direction: column;
    margin-top: 2rem;
}
.note{
    width: 80%;
    height: 10%;
    display: flex;
    justify-content: flex-start;
}
.notice{
    width: 30%;
    color: white;
    font-size: 2rem;
    font-family: var(--font-open-sans);
    background-color: var(--secondary-color);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 2rem;
}
.formulaire form{
    width: 80%;
    height: 100%;
    background-color: rgb(173, 171, 171);
    padding: 2rem;
}
.formulaire form h1{
    text-align: center;
    font-size: 4rem;
    font-family: var(--font-IBM);
}
input[type="mail"],
input[type="text"]{
    width: 80%;
    height: 50%;
    border-radius: var(--border-raduis);
    outline-color: var(--primary-color);
    padding: 1.5rem;
    border: 1px solid var(--text-color);
    outline: none;
    margin-bottom: 2rem;
}
input[type="number"]{
    width: 13rem;
    height: 3rem;
}
label{
    font-size: 2rem;
    font-family: var(--font-open-sans);
}
.form__age{
    width: 30%;
    height: 10%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.form__sexe{
    width: 20%;
    height: 10%;
    display: flex;
    margin-left: 10rem;
    align-items: center;
    justify-content: space-around;
}
.form__country{
    width: 30%;
    height: 10%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 3rem;
}
#country{
    width: 13rem;
    height: 3rem;
}
.form__choise{
    width: 100%;
    height: 20%;
    background-color: rgb(10, 15, 30);
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 5rem;
    padding: 2rem;
}
input[type="submit"]{
    width: 15rem;
    height: 3.5rem;
    cursor: pointer;
    font-size: 1.5rem;
    font-family: var(--font-open-sans);
    background-color: var(--primary-color);
    color: white;
    transition: 0.25 ease-out;
}
input[type="submit"]:hover{
  transform: scale(1.1);
}

</style>
</head>
<body>
<section class="formulaire" id="formChefAdd">
        <div class ="note">
            <div class="notice">
                <h3>Mofifier one chieff</h3>
            </div>
        </div>
        <form action="updateChef.php" method="post">
            <h1>Modifier a chief on Food<span>Up</span></h1>
            <input type="hidden" name="numChefModif"  value="<?php echo $mod['id']?>">

            <div class="form__name">
                    <label for="name">Name</label> <br><br>
                    <input  value="<?php echo $mod['name']?>" type="text" id="name" name="name" placeholder="****name" required autocomplete="off">
            </div>

            <div class="form__lastname">
                    <label for="lastname">Lastname</label> <br><br>
                    <input value="<?php echo $mod['lastname']?>" type="text" id="lastname" name="lastname" placeholder="****lastname" required autocomplete="off">
            </div>

            <div class="form__email">
                    <label for="mail">E-mail</label> <br><br>
                    <input value="<?php echo $mod['address']?>" type="mail" id="mail" name="email" placeholder="****mail" required autocomplete="off">
            </div>

            <div class="form__age">
                    <label for="age">Age</label>
                    <input value="<?php echo $mod['age']?>" type="number" id="age" name="age" placeholder="****age" required autocomplete="off">
            </div>

            <!-- <div class="form__sexe">
                    <div>
                        <label for="homme">M</label>                 <input type="checkbox" name="homme" id="homme">
                    </div>
                    <div>
                        <label for="homme">F</label>                 <input type="checkbox" name="femme" id="femme">
                    </div>
            </div> -->

            <div class="form__country">
                <label for="country">Country</label>
                <select value="<?php echo $mod['country']?>" name="country" id="country">
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
                    <input type="submit" value="Modifier" name="modification">
            </div>


    </section>
</body>
</html>



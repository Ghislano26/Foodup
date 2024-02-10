<?php 


     $connexion = new PDO('mysql:host=localhost;dbname=foodup', 'root', '');
         
 
 
     $test = $connexion->prepare('SELECT * FROM recettes WHERE id=:num');
 
     $test->bindValue(':num', $_GET['numRecipes'], PDO::PARAM_INT);
 
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

@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&display=swap');


:root{
    --primary-color: #f57217;
    --font-IBM: 'IBM Plex Sans', sans-serif;
    --font-open-sans: 'Open Sans', sans-serif;
    --secondary-color: #aa4805;
    --text-color: #5b5a5a;
    --border-raduis: 1.2rem;
    --gradient: linear-gradient(40deg, rgba(0, 0, 0, 0.85)0%, rgba(0, 0, 0, 0.3));

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
.notice{
    width: 20rem;
    height: 3.5rem;
    cursor: pointer;
    text-align: center;
    font-size: 1.2rem;
    padding: 2rem;
    font-family: var(--font-open-sans);
    background-color: var(--primary-color);
    color: white;
    margin-bottom: 5rem;
    display: flex;
    align-items: center;
    justify-content: center;
}
label{
    font-size: 2rem;
    font-family: var(--font-open-sans);
}
.recette{
    width: 50%;
    height: 50%;
    background-color: rgb(173, 171, 171);
    padding: 2rem;
    margin: 0 auto;
}
.recette h1{
    text-align: center;
    font-size: 4rem;
    font-family: var(--font-IBM);
    margin-bottom: 5rem;
}
.recipeSelect{
    width: 50rem;
    height: 20rem;
    border: 1px dashed black;
    display: flex;
    justify-content: center;
    align-items: center;
}
.form__date{
    width: 35%;
    margin-top: 2rem;
    margin-bottom: 2rem;
    display: flex;
    justify-content: space-between;   
}
textarea{
    padding: 1rem;
}
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
.form__choise{
    padding: 2rem;
}






    </style>
</head>
<body>
    
<section class="recette" id="recipes">

<div class ="note">
        <div class="notice">
            <h3>Modifier Recipes</h3>
        </div>
    </div>
    <form action="update.php" method="post" id="myForm">
        <h1>Modifier a recipes on Food<span>Up</span></h1>
        <input type="hidden" name="numRecipes"  value="<?php echo $mod['id']?>">

        <div class="form__name">
                <label for="name">Recipes name</label> <br><br>
                <input value="<?php echo $mod['recipes']?>"  type="text" id="speudo" name="speudo" placeholder="****Recipesname" required autocomplete="off">
                <br><span id="mailSmall"></span>
        </div>
        

        <div class="form__name">
                <label for="auteur">Auteur</label> <br><br>
                <input value="<?php echo $mod['auteur']?>"  type="text" id="auteur" name="auteur" placeholder="****auteur" required autocomplete="off">
                <br><span id="autorSmall"></span>
        </div>

        <div class="form__date">
                <label for="DateAdd">Date of add :</label> <br><br>
                <input value="<?php echo $mod['date']?>"  type="date" id="dateOfAdd" name="dateOfAdd" placeholder="****auteur" required autocomplete="off">
        </div> <br> <br>

        <div class="form__ingred">
                <label for="ingred">Write ingrediant:</label> <br><br>
                <textarea value="<?php echo $mod['ingredient']?>" name="ingred" id="ingred" cols="80" rows="10" placeholder="Write ingrediant food" maxlength="255"></textarea>
        </div> 
        <br><span id="ingredSmall"></span>
        <br> <br>
        

        <div class="form__lastname">
                <label for="lastname">Selectionner une recette</label> <br><br>
                <div class="recipeSelect">
                    <input value="<?php echo $mod['vue']?>"  type="file" name="imageRecette" id="">
                </div>
        </div>
            

        <div class="form__choise">
            
                <input type="submit" value="Modifier" name = "modif">
        </div>








</section>


<script src="../js/modifRecipes.js"></script>
</body>
</html>

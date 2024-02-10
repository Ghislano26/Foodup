
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminboard.css">
    <title>Document</title>
    <style>

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

.recette{
    width: 50%;
    height: 20%;
    background-color: rgb(173, 171, 171);
    padding: 2rem;
    margin: 0 auto;
    animation: anim 2.5s;
}
@keyframes anim {
    0%{
        transform: translateY(-1200px);
    }
    100%{
        transform: translateY(0);
    }
}
.notice{
    font-size: 1.2rem;
    padding: 1rem;
    margin-bottom: 3rem;
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
    display: flex;
    justify-content: space-between;   
    margin-bottom: 2rem;
    margin-top: 2rem;
}
textarea{
    padding: 1rem;
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
            <h3>Add Recipes</h3>
        </div>
    </div>
    <form action="addRecipes.php" method="post" id = "myForm">
        <h1>Add a recipes on Food<span>Up</span></h1>

        <div class="form__name">
                <label for="name">Recipes name</label> <br><br>
                <input type="text" id="speudo" name="speudo" placeholder="****Recipesname" required autocomplete="off">
                <br><span id="mailSmall"></span>
        </div>

        <div class="form__name">
                <label for="auteur">Auteur</label> <br><br>
                <input type="text" id="auteur" name="auteur" placeholder="****auteur" required autocomplete="off">
                <br><span id="autorSmall"></span>
        </div>

        <div class="form__date">
                <label for="DateAdd">Date of add :</label> <br><br>
                <input type="date" id="dateOfAdd" name="dateOfAdd" placeholder="****auteur" required autocomplete="off">
        </div> <br> <br>

        <div class="form__ingred">
                <label for="ingred">Write ingrediant:</label> <br><br>
                <textarea name="ingred" id="ingred" cols="80" rows="10" placeholder="Write ingrediant food"></textarea>
        </div> 
        <br><span id="ingredSmall"></span>
        <br> <br>
        

        <div class="form__lastname">
                <label for="lastname">Selectionner une recette</label> <br><br>
                <div class="recipeSelect">
                    <input type="file" name="imageRecette" id="">
                </div>
        </div>
            

        <div class="form__choise">
            
                <input type="submit" value="Add" name = "modif">
                
        </div>








</section>















<script src="../js/addRecipes.js"></script>
<script src="../js/Recipes.js"></script>
</body>
</html>


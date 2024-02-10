<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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



    .listChef{
    width: 100%;
    height: 100%;
    background-color: blue;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    font-size: 2rem;
    font-family: var(--font-IBM);
}
th{
    background-color: black;
}
table,tr,td{
    background-color: blue;
    color: white;
    border-bottom: 2px solid black;
    border-right: 2px solid black;
}
table{
    width: 100%;
    height: 50%;
    text-align: center;
    font-size: 1rem;
    font-family: var(--font-open-sans);
    border-collapse: collapse;
}
.form__choise{
    width: 100%;
    /* background-color: #172df5; */
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    margin-top: 5rem;

}
input[type="submit"]:hover{
    transform: scale(1.1);
}
input[type="submit"]{
    padding: .5rem 3rem .5rem;
    font-family: var(--font-IBM);
    background-color: var(--primary-color);
    color: white;
    font-size: 1.2rem;
    cursor: pointer;
    transition: 0.25s ease;
    z-index: 1;
    border: none;
}
</style>
<body>


<section class="listChef">
<h1>List of Recipes on FoodUp</h1>
                
<table>
    <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Age</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        
    </tr>
    <?php 
            // Connexio a la database

  
     try {
            $connexion =  new PDO('mysql:host=localhost;dbname=foodup', 'root', '');

    } catch (Exception $e) {

        die('Erreur : '.$e->getMessage());
     }

      // Récupération des Cuisiniers



    $reponse = $connexion->query('SELECT * FROM admin');

     while ($donnees = $reponse->fetch()) {
        echo '
        
        <tr>
            <td style="background-color: white; color: black;">'.$donnees['nom'].'</td>
            <td style="background-color: white; color: black;">'.$donnees['prenom'].'</td>
            <td style="background-color: white; color: black;">'.$donnees['email'].'</td>
            <td style="background-color: white; color: black;">'.$donnees['age'].'</td>
            <td style="background-color: white; color: black;">
                <a href="modifAdmin.php?numAdmin='.$donnees['id'].'"><img src="../assets/img/pen-to-square-solid.svg" alt="" style="width: 40px;";></a>
            </td> 
            <td style="background-color: white; color: black;"><a href="deleteRecipesDb.php?numRecipes='.$donnees['id'].'"><img src="../assets/img/trash-can-regular.svg" alt="" style="width: 40px;";></a></td> 
        </tr>';
     }
     

?> 



</table>      

                


</section>

                <div class="form__choise">
                    <a href="admin.php"><input type="submit" value="admin page"></a>
                </div>
    
</body>
</html>
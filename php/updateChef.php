<?php 


     $connexion = new PDO('mysql:host=localhost;dbname=foodup', 'root', '');
         
 
 
     $test = $connexion->prepare('UPDATE  chiefs SET name=:name, lastname=:lastname, address=:address, age=:age, country=:country WHERE id=:num LIMIT 1');
 

     $test->bindValue(':num', $_POST['numChefModif'], PDO::PARAM_INT);
     $test->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
     $test->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
     $test->bindValue(':address', $_POST['email'], PDO::PARAM_STR);
     $test->bindValue(':age', $_POST['age'], PDO::PARAM_STR);
     $test->bindValue(':country', $_POST['country'], PDO::PARAM_STR);



    $reussite = $test->execute();

    if ($reussite) {
        header("location: deleteChef.php");
    }
    
 
 
 
 

    
     

?>
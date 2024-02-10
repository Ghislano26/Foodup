let form = document.getElementById('myForm');
console.log(form.speudo);

form.speudo.addEventListener('change', function() {
    validName(this);
});
form.auteur.addEventListener('change', function() {
    validAuteur(this);
});
form.ingred.addEventListener('change', function() {
    validIngredient(this);
});

// Condition de soummisson du formulaire
form.addEventListener('submit', function(e){
    e.preventDefault();
    if (validName(form.speudo) && validAuteur(form.auteur) && validIngredient(form.ingred)) {
        form.submit();
    }
})


// // verification du nom de la recette
function validName(name) {
    let msg;
    let valid = false;

     // au moins 1 majuscule
     if (!/[A-Z]/.test(name.value)) {
        msg = 'Your recipes we have 1 uppercase word';
     }
    // au moins 1 minuscule
    else if (!/[a-z]/.test(name.value)) {
        msg = 'Your recipes we have 1 lowercase word';
     }
    // au moins 1 chiffre
    else if (/[0-9]/.test(name.value)) {
        msg = 'Not  have a number';
    }
    else if(/@/.test(name.value)){
        msg = 'Charaactere @ not supported';
    }
    else if(/!/.test(name.value)){
        msg = 'Charaactere ! not supported';
    }
    else{
        msg = 'Name Of Recipes valid';
        valid = true;
    }

    // affichage des elements
    let passName = document.getElementById('mailSmall');
    if (valid) {
        passName.innerHTML = 'Recipes valid';
        passName.style.fontSize = '15px';
        passName.style.color = 'green';
        return true;
        
    } else{
        passName.innerHTML = msg;
        passName.style.fontSize = '15px';
        passName.style.color = 'red';
        return false;
    }
}



// // verification du nom de auteur
function validAuteur(auteur) {
    let msg;
    let valid = false;

     // au moins 1 majuscule
     if (!/[A-Z]/.test(auteur.value)) {
        msg = 'Your autor we have 1 uppercase word';
     }
    // au moins 1 minuscule
    else if (!/[a-z]/.test(auteur.value)) {
        msg = 'Your autor we have 1 lowercase word';
     }
    // au moins 1 chiffre
    else if (/[0-9]/.test(auteur.value)) {
        msg = 'Not  have a number';
    }
    else if(/@/.test(auteur.value)){
        msg = 'Charaactere @ not supported';
    }
    else if(/!/.test(auteur.value)){
        msg = 'Charaactere ! not supported';
    }
    else{
        msg = 'Name Of Autor valid';
        valid = true;
    }

    // affichage des elements
    let passAuteur = document.getElementById('autorSmall');
    if (valid) {
        passAuteur.innerHTML = 'Name of autor valid';
        passAuteur.style.fontSize = '15px';
        passAuteur.style.color = 'green';
        return true;
        
    } else{
        passAuteur.innerHTML = msg;
        passAuteur.style.fontSize = '15px';
        passAuteur.style.color = 'red';
        return false;
    }
}




// // verification des ingredients
function validIngredient(ingred) {
    let msg;
    let valid = false;

     // au moins 1 majuscule
     if (!/[A-Z]/.test(ingred.value)) {
        msg = 'Your autor we have 1 uppercase word';
     }
    // au moins 1 minuscule
    else if (!/[a-z]/.test(ingred.value)) {
        msg = 'Your autor we have 1 lowercase word';
     }
    // au moins 1 chiffre
    else if (/[0-9]/.test(ingred.value)) {
        msg = 'Not  have a number';
    }
    else if(/@/.test(ingred.value)){
        msg = 'Charaactere @ not supported';
    }
    else if(/!/.test(ingred.value)){
        msg = 'Charaactere ! not supported';
    }
    else{
        msg = 'Composition ingredient valid valid';
        valid = true;
    }

    // affichage des elements
    let passIndreg = document.getElementById('ingredSmall');
    if (valid) {
        passIndreg.innerHTML = 'Name of ingrdiant valid';
        passIndreg.style.fontSize = '15px';
        passIndreg.style.color = 'green';
        return true;
        
    } else{
        passIndreg.innerHTML = msg;
        passIndreg.style.fontSize = '15px';
        passIndreg.style.color = 'red';
        return false;
    }
}





// gestion du formulaire addAChef
let myform = document.getElementById('formChefAdd');
myform.name.addEventListener('change', function() {
    validNameChef(this);
});


// // Condition de soummisson du formulaire
// myform.addEventListener('submit', function(e){
//     e.preventDefault();
//     if (validNameChef(myform.name)) {
//         myform.submit();
//     }
// })


// // // verification du nom de la recette
// function validNameChef(name) {
//     let msg;
//     let valid = false;

//      // au moins 1 majuscule
//      if (!/[A-Z]/.test(name.value)) {
//         msg = 'Your recipes we have 1 uppercase word';
//      }
//     // au moins 1 minuscule
//     else if (!/[a-z]/.test(name.value)) {
//         msg = 'Your recipes we have 1 lowercase word';
//      }
//     // au moins 1 chiffre
//     else if (/[0-9]/.test(name.value)) {
//         msg = 'Not  have a number';
//     }
//     else if(/@/.test(name.value)){
//         msg = 'Charaactere @ not supported';
//     }
//     else if(/!/.test(name.value)){
//         msg = 'Charaactere ! not supported';
//     }
//     else{
//         msg = 'Name of Chef valid';
//         valid = true;
//     }

//     // affichage des elements
//     let ChefName = document.getElementById('chefNames');
//     if (valid) {
//         ChefName.innerHTML = 'Name of chef valid';
//         ChefName.style.fontSize = '15px';
//         ChefName.style.color = 'green';
//         return true;
        
//     } else{
//         ChefName.innerHTML = msg;
//         ChefName.style.fontSize = '15px';
//         ChefName.style.color = 'red';
//         return false;
//     }
// }
// controle de la souris
const mouve = document.querySelector(".Fluid_mouse");
        window.addEventListener("mousemove", function(e) {
            
            mouve.style.left = e.pageX + "px";
            mouve.style.top = e.pageY + "px";
        });

let myForm = document.querySelector('#myForm');

// ecoute evenememt sur le changement adresse mail
myForm.mail.addEventListener('change', function() {
    validEmail(this);
});

// ecoute evenememt sur le mot de passe
myForm.password.addEventListener('change', function() {
    validPassword(this);
});

// Condition de soummisson du formulaire
myForm.addEventListener('submit', function(e){
    e.preventDefault();
    if (validEmail(myForm.mail) && validPassword(myForm.password)) {
        myForm.submit();
    }
})


// verification de adresse mail
function validEmail(imputEmail) {
    let emailRegExp = new RegExp('^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$', 'g');

    let text = emailRegExp.test(imputEmail.value);

    const mailSmall = document.getElementById('mailSmall');
    if (text) {
        mailSmall.innerHTML = 'Mail address valid';
        mailSmall.style.fontSize = '15px';
        mailSmall.style.color = 'green';
        return true;
        
    } else{
        mailSmall.innerHTML = 'Mail address not valid';
        mailSmall.style.fontSize = '15px';
        mailSmall.style.color = 'red';
        return false;
    }
}

// verification du mot de passe
function validPassword(imputPassword) {
    let msg;
    let valid = false;
     // au moins 4 caracteres
     if (imputPassword.value.length < 4) {
        msg = 'Password we have 4 characteres';
     }

     // au moins 1 majuscule
     else if (!/[A-Z]/.test(imputPassword.value)) {
        msg = 'Password we have 1 uppercase word';
     }
    // au moins 1 minuscule
    else if (!/[a-z]/.test(imputPassword.value)) {
        msg = 'Password we have 1 lowercase word';
     }
    // au moins 1 chiffre
    else if (!/[0-9]/.test(imputPassword.value)) {
        msg = 'Password we have 1 number';
    }
    else{
        msg = 'Password valid';
        valid = true;
    }

    // affichage des elements
    let passSmall = document.getElementById('passSmall');
    if (valid) {
        passSmall.innerHTML = 'Password valid';
        passSmall.style.fontSize = '15px';
        passSmall.style.color = 'green';
        return true;
        
    } else{
        passSmall.innerHTML = msg;
        passSmall.style.fontSize = '15px';
        passSmall.style.color = 'red';
        return false;
    }
}



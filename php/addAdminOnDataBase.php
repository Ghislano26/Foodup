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

.options__modifier{
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}
.options__voir{
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}
.options__supprimer{
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
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
    width: 20%;
    padding: 2rem;
    color: white;
    font-size: 2rem;
    font-family: var(--font-open-sans);
    background-color: var(--secondary-color);
    display: flex;
    justify-content: center;
    align-items: center;
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

#country{
    width: 13rem;
    height: 3rem;
}
.form__choise{
    width: 100%;
    padding: 3rem;
    height: 10%;
    background-color: rgb(10, 15, 30);
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 2rem;
}

    </style>
</head>
<body>
<section class="formulaire" id="formChefAdd">
        <div class ="note">
            <div class="notice">
                <h3>Add Chief</h3>
            </div>
        </div>
        <form action="addAdmin.php" method="post">
            <h1>Add a chief on Food<span>Up</span></h1>

            <div class="form__name">
                    <label for="name">Name</label> <br><br>
                    <input type="text" id="name" name="name" placeholder="****name" required autocomplete="off">
                    <br><span id="chefNames"></span>
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

            <div class="form__choise">
                 <input type="submit" value="Add">
            </div>
        </form>
</body>
</html>
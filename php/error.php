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
    --gradient: linear-gradient(40deg, rgba(8, 15, 17, 0.8)12%, rgba(0, 0, 0, 0.3));

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
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    padding: 5rem;
    display: flex;
    justify-content: center;
    align-items: center;
}
.popAnonce{
    width: 60rem;
    height: 30rem;
    background: var(--gradient);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 8rem;
    animation: speed 3s ease;
}

@keyframes speed {
  0% {
    transform: translateX(-500px);
  }
  100% {
    transform: translateX(0px);
  }
}
.popAnonce h1{
    font-size: 2.1rem;
    font-family: var(--font-IBM);
    color: white;
    font-weight: bold;
}
.popAnonce div{
    width: 95%;
    height: 20%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    
    /* background-color: red; */
}
button{
    width: 15rem;
    height: 5rem;
    background-color: var(--primary-color);
    color: white;
    font-family: var(--font-IBM);
    font-size: 1.8rem;
    transition: 0.25 ease;
}
span{
    color: var(--primary-color);
}
button:hover{
    background-color: var(--secondary-color);
    transform: scale(1.1);
    cursor: pointer;
}



</style>
<body>
    

    <div class = 'popAnonce'>

        <div>
        <h1>Rassurez-vous d'être un Admin ou un chef de Food <span>Up</span></h1>
        </div>

        <a href="../connect.html"><button>Ressayer</button></a>


    </div>









</body>
</html>
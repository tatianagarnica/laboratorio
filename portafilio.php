<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portafolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
       <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
       <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lato', sans-serif;
    font-family: 'Oswald', sans-serif;
  }
  .imagen{
    display: flex;
    flex-direction: column;
    height: 40px;
    width: 60px;
    position: relative;
    left: 40px;
    top: 20px;
  }
  .imagen img{
    display: block;
    float: left;
    width: 150%;
    max-width: 400%;
    object-fit: cover;
    object-position: top;
    
  }

  .wrapper{
    position: fixed;
    top: 0;
    right: -100%;
    height: 100%;
    width: 100%;
    background: #0c0c0c;
    z-index: 2;
    transition: all 0.6s ease-in-out;
  
   
  }
  #active:checked ~ .wrapper{
    right:0;
  }
  .menu-btn{
    position: absolute;
    z-index: 4;
    right: 20px;
    top: 20px;
    height: 50px;
    width: 50px;
    text-align: center;
    line-height: 50px;
    border-radius: 50%;
    font-size: 20px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    position: fixed;
   
  }
  .menu-btn span,
  .menu-btn:before,
  .menu-btn:after{
      content: "";
      position: absolute;
      top: calc(50% - 1px);
      left: -2%;
      width: 40%;
      border-bottom: 2px solid #050505;
      transition: transform .6s cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  .menu-btn:before{
    transform: translateY(-8px);
  }
  .menu-btn:after{
    transform: translateY(8px);
  }
  
  
  .close {
      z-index: 1;
      width: 100%;
      height: 100%;
      pointer-events: none;
      transition: background .6s;
  }
  
  /* closing animation */
  #active:checked + .menu-btn span {
      transform: scaleX(0);
    border-color: #fff;
  }
  #active:checked + .menu-btn:before {
      transform: rotate(45deg);
    border-color: #fff;
  }
  #active:checked + .menu-btn:after {
      transform: rotate(-45deg);
    border-color: #fff;
  }
  .wrapper ul{
    position: absolute;
    top: 60%;
    left: 50%;
    height: 90%;
    transform: translate(-50%, -50%);
    list-style: none;
    text-align: center;
  }
  .wrapper ul li{
    height: 10%;
    margin: 15px 0;
    
  }
  .wrapper ul li a{
    text-decoration: none;
    font-size: 30px;
    font-weight: 500;
    padding: 10px 50px;
    white-space: nowrap;
    color: #ffffff;
    border-radius: 50px;
    position: absolute;
    line-height: 30px;
    margin: 5px 50px;
    transition: all 0.3s ease;
    transition: transform .6s cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  .wrapper ul li a:after{
    position: absolute;
    content: "";
    background: #fff;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    border-radius: 50px;
    transform: scaleY(0);
    z-index: -1;
    transition: transform 0.3s ease;
    
  
  }
  .wrapper ul li a:hover:after{
    transform: scaleY(1);
  }
  .wrapper ul li a:hover{
    color: #8b1ae8;
  }
  input[type="checkbox"]{
    display: none;}



@import url('https://fonts.googleapis.com/css?family=Heebo:400,700|Open+Sans:400,700');

:root {
  --color: #000000;
  --transition-time: 0.5s;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  min-height: 100vh;
  font-family: 'Lato', sans-serif;
  font-family: 'Oswald', sans-serif;
  background-image: linear-gradient(rgba(252, 252, 252, 0.3), rgba(250, 250, 250, 0.3)),url(./imagenes/9166520.jpg) ;


}

a {
  color: inherit;
}

.cards-wrapper {
  display: grid;
  justify-content: center;
  align-items: center;
  grid-template-columns: 1fr 1fr;
  grid-gap: 4rem;
  padding: 4rem;
  margin: 0 auto;
  width: max-content;
  position: relative;
  top: -15px;
}

.card {
    font-family: 'Lato', sans-serif;
    font-family: 'Oswald', sans-serif;
  --bg-filter-opacity: 0.5;
  background-image: linear-gradient(rgba(0,0,0,var(--bg-filter-opacity)),rgba(0,0,0,var(--bg-filter-opacity))), var(--bg-img);
  height: 20em;
  width: 25em;
  font-size: 1.5em;
  color: rgb(255, 255, 255);
  border-radius: 1em;
  padding: 1em;
  /*margin: 2em;*/
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  box-shadow: 0 0 5em -1em black;
  transition: all, var(--transition-time);
  position: relative;
  overflow: hidden;
  border: 10px solid #ccc;
  text-decoration: none;
  background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)),url(./imagenes/woman-hairdresser-salon.jpg);

}

.card:hover {
  transform: rotate(0);
}

.card h2 {
  margin: 0;
  font-size: 1.5em;
  line-height: 1.2em;
}

.card p {
  font-size: 0.75em;
  font-family: 'Oswald', sans-serif;
  margin-top: 0.5em;
  line-height: 2em;
  
}


.card .tags {
  display: flex;
}

.card .tags .tag {
  font-size: 0.75em;
  background: rgba(255,255,255,0.5);
  border-radius: 0.3rem;
  padding: 0 0.5em;
  margin-right: 0.5em;
  line-height: 1.5em;
  transition: all, var(--transition-time);
}

.card:hover .tags .tag {
  background: var(--color);
  color: white;
}

.card .date {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 1em;
  padding: 1em;
  line-height: 1em;
 
  font-family: 'Oswald', sans-serif;
 
}

.card:before, .card:after {
  content: '';
  transform: scale(0);
  transform-origin: top left;
  border-radius: 50%;
  position: absolute;
  left: -50%;
  top: -50%;
  z-index: -5;
  transition: all, var(--transition-time);
  transition-timing-function: ease-in-out;
}

.card:before {
  background: #ddd;
  width: 250%;
  height: 250%;
}

.card:after {
  background: white;
  width: 200%;
  height: 200%;
}

.card:hover {
  color: var(--color);
}

.card:hover:before, .card:hover:after {
  transform: scale(1);
}

.card-grid-space .num {
  font-size: 3em;
  margin-bottom: 1.2rem;
  margin-left: 1rem;
}

.info {
  font-size: 1.2em;
  display: flex;
  padding: 1em 3em;
  height: 3em;
}

.info h2 {
  font-size: 35px;
  color: #000000;
  font-family: 'Lato', sans-serif;
  font-family: 'Oswald', sans-serif;
  
  position: relative;
  top: 20px;
  
}


@media screen and (max-width: 1285px) {
  .cards-wrapper {
    grid-template-columns: 1fr 1fr;
  }
}

@media screen and (max-width: 900px) {
  .cards-wrapper {
    grid-template-columns: 1fr;
  }
  .info {
    justify-content: center;
  }
  .card-grid-space .num {
    margin-left: 0;
    text-align: center;
  }
}

@media screen and (max-width: 500px) {
  .cards-wrapper {
    padding: 4rem 2rem;
  }
  .card {
    max-width: calc(100vw - 4rem);
  }
}

@media screen and (max-width: 450px) {
  .info {
    display: block;
    text-align: center;
  }
  .info h2 {
    margin: 0;
  }
}




.card1 {
    font-family: 'Lato', sans-serif;
    font-family: 'Oswald', sans-serif;
  --bg-filter-opacity: 0.5;
  background-image: linear-gradient(rgba(0,0,0,var(--bg-filter-opacity)),rgba(0,0,0,var(--bg-filter-opacity))), var(--bg-img);
  height: 20em;
  width: 25em;
  font-size: 1.5em;
  color: rgb(255, 254, 254);
  border-radius: 1em;
  padding: 1em;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  box-shadow: 0 0 5em -1em black;
  transition: all, var(--transition-time);
  position: relative;
  overflow: hidden;
  border: 10px solid #ccc;
  text-decoration: none;
  background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2)),url(./imagenes/medium-shot-woman-checking-product.jpg);
  
}

.card1:hover {
  transform: rotate(0);
}

.card h2 {
  margin: 0;
  font-size: 1.5em;
  line-height: 1.2em;
}

.card1 p {
  font-size: 0.75em;
  font-family: 'Oswald', sans-serif;
  margin-top: 0.5em;
  line-height: 2em;
  
}


.card1 .tags {
  display: flex;
}

.card1 .tags .tag {
  font-size: 0.75em;
  background: rgba(255,255,255,0.5);
  border-radius: 0.3rem;
  padding: 0 0.5em;
  margin-right: 0.5em;
  line-height: 1.5em;
  transition: all, var(--transition-time);
}

.card1:hover .tags .tag {
  background: var(--color);
  color: white;
}

.card1 .date {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 1em;
  padding: 1em;
  line-height: 1em;
  
  font-family: 'Oswald', sans-serif;
 
}

.card1:before, .card:after {
  content: '';
  transform: scale(0);
  transform-origin: top left;
  border-radius: 50%;
  position: absolute;
  left: -50%;
  top: -50%;
  z-index: -5;
  transition: all, var(--transition-time);
  transition-timing-function: ease-in-out;
}

.card1:before {
  background: #ddd;
  width: 250%;
  height: 250%;
}

.card1:after {
  background: white;
  width: 200%;
  height: 200%;
}

.card1:hover {
  color: var(--color);
}

.card1:hover:before, .card:hover:after {
  transform: scale(1);
}

.card1-grid-space .num {
  font-size: 3em;
  margin-bottom: 1.2rem;
  margin-left: 1rem;
}



@media screen and (max-width: 1285px) {
  .cards-wrapper {
    grid-template-columns: 1fr 1fr;
  }
}

@media screen and (max-width: 900px) {
  .cards-wrapper {
    grid-template-columns: 1fr;
  }
  .info {
    justify-content: center;
  }
  .card1-grid-space .num {
    margin-left: 0;
    text-align: center;
  }
}

@media screen and (max-width: 500px) {
  .cards-wrapper {
    padding: 4rem 2rem;
  }
  .card1 {
    max-width: calc(100vw - 4rem);
  }
}

@media screen and (max-width: 450px) {
  .info {
    display: block;
    text-align: center;
  }
  .info h2 {
    margin: 0;
  }
}
       </style>
</head>
<body>
</div>
<div class="hadebar">
    <div class="imagen">
     <img src="./imagenes/tatiana-garnica-high-resolution-logo-transparent.png" alt="">
</div>
<input type="checkbox" id="active">
<label for="active" class="menu-btn"><span></span></label>
<label for="active" class="close"></label>
<div class="wrapper">
<ul>
 <li><a href="parcial.php">Acerca Mi</a></li>
 <li><a href="estudios.php">Estudios</a></li>
 <li><a href="portafilio.php">Portafolio</a></li>
 <li><a href="contacto.php">Contacto</a></li>
</ul>
</div>
    <section class="info">
    <h2>Mi Portafolio</h2>
      </section>
      <section class="cards-wrapper">
        <div class="card-grid-space">
          <div class="card">
            <div>
              <h2>Estilista</h2>
              <p>Cuento con mas de dos años trabajando en este lugar. Realizo corte para hombre,cepillados y peinados, garantizo la limpieza del lugar y los elementos</p>
              <div class="date">Actualmente</div>
              <div class="tags">
                <div class="tag">Distribelleza, Yismart</div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-grid-space">
          <div class="card1">
            <div>
              <h2>Tienda</h2>
              <p>Trabeje con conjunto al equipo para proveer excelente servicio al cliente y resolviendo las diferentes problematicas para brindar una solucion optima</p>
              <div class="date">2015-2017</div>
              <div class="tags">
                <div class="tag">Tienda, Los Tios</div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
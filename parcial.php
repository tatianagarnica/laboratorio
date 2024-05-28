<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
  <link href="<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  " rel="stylesheet">
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
  left: 250px;
  top: -300px;
}
.imagen img{
  display: block;
  float: left;
  width: 200%;
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
  display: none;
}
.content {
  position: absolute;
  top:50%;
  left: 65%;
  transform: translate(-50%, -50%);
  z-index: -1;
  text-align: justify;
  width: 45%;
 
  
  
}
.content .title{
  font-size: 50px;
  font-weight: 700;
  white-space:inherit;
  display: inline-block;
  color: #000000;
  
}
.content p{
  font-size: 20px;
  text-align: justify;
  color: #000000;

}

#active:checked ~ .wrapper ul li a{
  opacity: 1;
}
.wrapper ul li a{
  transition: opacity 1.2s, transform 1.2s cubic-bezier(0.215, 0.61, 0.355, 1);
  transform: translateX(100px);
}
#active:checked ~ .wrapper ul li a{
	transform: none;
	transition-timing-function: ease, cubic-bezier(.1,1.3,.3,1); 
   transition-delay: .6s;
  transform: translateX(-100px);
}
.figure{
  display: flex;
  flex-direction: column;
  gap: 2em;
  height: 300px;
  width: 300px;
  position: relative;
  left: 250px;
  top: -20px;
  
}

.figure img{
  display: block;
  float: left;
  width: 300%;
  aspect-ratio: 2/2;
  max-width: 400px;
  object-fit: cover;
  object-position: top;
  border-radius: 50%;
}

/*cajas*/

body
{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  min-width: 100%;
  background-image: linear-gradient(rgba(252, 252, 252, 0.3), rgba(250, 250, 250, 0.3)),url(./imagenes/9166520.jpg) ;

 
 
}

.container
{

  display: grid;
  position: relative;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  padding: 60px;
  margin-bottom: -120%;
  grid-template-columns: repeat(4,320px);
  width: 100%;
  left: -160px;
  margin-right: 10px;
  grid-column: span 4;
 
 
  
}

.container .box
{
  position: relative;
  width: 450px;
  height: 0px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 50px 30px;
  transition: 0.5s;
  padding: 100px;
 
}

.container .box::before
{
  content:' ';
  position: absolute;
  top: -155px;
  left: -0px;
  width: 40%;
  height: 50%;
  text-decoration: none;
  background: #fff;
  border-radius: 8px;
  transform: skewX(15deg);
  transition: 0.5s;
  
  
}

.container .box::after
{
  content:'';
  position: absolute;
  top: -150px;
  left: 1px;
  width: 50%;
  height: 60%;
  background: #fff;
  border-radius: 8px;
  transform: skewX(15deg);
  transition: 0.5s;
  filter: blur(40px);
 
 
}

.container .box:hover:before,
.container .box:hover:after
{
  transform: skewX(0deg);
  left: 35px;
  width: calc(50% - 20px);
  
}
.container .box:nth-child(1):before,
.container .box:nth-child(1):after
{
  background: linear-gradient(315deg, #03a9f4, #ff0058)
}

.container .box:nth-child(2):before,
.container .box:nth-child(2):after
{
  background: linear-gradient(315deg, #03a9f4, #ff0058)
}

.container .box:nth-child(3):before,
.container .box:nth-child(3):after
{
  background: linear-gradient(315deg, #03a9f4, #ff0058)
}

.container .box:nth-child(4):before,
.container .box:nth-child(4):after
{
  background: linear-gradient(315deg, #03a9f4, #ff0058)
}



.container .box:hover span::before
{
  top: -50px;
  left: 50px;
  width: 100px;
  height: 100px;
  opacity: 1;
}


@keyframes animate
{
  0%, 100%
  {
    transform: translateY(10px);
  }
  
  50%
  {
    transform: translate(-10px);
  }
}

.container .box .content
{
  position: relative;
  left: 0px;
  top: -150px;
  height: 120px;
  width: 100%;
  padding: 50px 30px;
  background: rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(10px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  z-index: 1;
  transform: 0.5s;
  color: #000000;
  
  
}

.container .box:hover .content
{
  left: -20px;
  padding: 60px 40px;
}

.container .box .content h2
{
  font-size: 1em;
  color: #000000;
  margin-bottom: -60px;
  text-align: start;
  position: relative;
  top: -30px;
  
  
}

.container .box .content p
{
  font-size: 20px;
  margin-bottom: -10px;
  text-align: end;
  position: relative;
  top: -70px;
  left: 20px;
  text-align: end;
 
}
.content img{
  position: relative;
  left: -15px;
  width: 35px;
  align-items: center;
  justify-content: left;
  
}
.container .box .content .parr1 p{
  position: relative;
  left: -70px;
  top: -70px;
  font-size: 19px;
}
.container .box .content .parr2 p{
  position: relative;
  left: -40px;
  top: -70px;
  font-size: 20px;
}
.container .box .content .parr3 p{
  position: relative;
  left: -20px;
  top: -70px;
  font-size: 20px;
}

  
h3{
  position: relative;
  top: -80px;
  left: -16px;
  text-align: start;

}


  </style>
  
<body>


  <div class="hadebar">
    <div class="imagen">
      <img src="./imagenes/tatiana-garnica-high-resolution-logo-transparent.png" alt="">
    </div>
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
<div class="main">
  <div class="figure">
    <img src="./imagenes/mis xv-5.jpg" alt="">
  </div>

  <div class="content">
      <div class="title">
       <h2>Angie Tatiana</h2>
       <h2>Garnica Aya</h2>
      </div>
      <p>Hola,soy del municipio de Melgar. Naci el 4 de marzo de 2003,tengo 21 años de edad, soy la mayor de dos hermanos. Me considero responsable,honesta y respetuosa, mis pasatiempos favorito es ver peliculas.  Espero que puedas conocerme e inspirarte.</p>
  </div>
</div> 
  <div class="container">
    <div class="box">
      <div class="content">
      <i class='bx bxl-whatsapp'></i>
        <img src="./imagenes/envelope-solid-24.png" alt="">
        <h3>Correo</h3>
        <p>angiegarnica@gmail.com</p> 
      </div>
    </div>
    <div class="box">
      <div class="content">
        <img src="./imagenes/phone-solid-24.png" alt="">
        <h3>Telefono</h3>
        <div class="parr1">
          <p>3212702557</p>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="content">
        <img src="./imagenes/facebook-square-logo-24.png" alt="">
        <h3>Facebook</h3>
        <div class="parr2">
          <p>Tatiana Garnica</p>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="content">
        <img src="./imagenes/instagram-alt-logo-24.png" alt="">
        <h3>Instagram</h3>
        <div class="parr3">
         <p>tatiana_garnica04</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
    
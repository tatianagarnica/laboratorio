<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
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
@import url('https://fonts.googleapis.com/css?family=Montserrat');

*
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  height: max-content;
}

body
{
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  min-height: 100vh;
  background-image: linear-gradient(rgba(252, 252, 252, 0.3), rgba(250, 250, 250, 0.3)),url(./imagenes/9166520.jpg) ;

}

ul{list-style: none}

#timeline
{
  width: 100%;
  height: 1120px;
  
}

#timeline ul
{
  min-height: 950px;
  border-top: 0;
  border-left: 4px solid transparent;
  border-left-color: #7ab800; /* Fullback */
  -webkit-border-image: -webkit-linear-gradient( 
    top, 
    #7ab800 0%,
    #0085c3 35%,
    #f2af00 50%,
    #ce1126 65%,
    #6e2585 100%);
  -moz-border-image: -moz-linear-gradient( 
    top, 
    #7ab800 0%,
    #0085c3 35%,
    #f2af00 50%,
    #ce1126 65%,
    #6e2585 100%);
  -ms-border-image: -ms-linear-gradient( 
    top, 
    #7ab800 0%,
    #0085c3 35%,
    #f2af00 50%,
    #ce1126 65%,
    #6e2585 100%);
  -o-border-image: -o-linear-gradient( 
    top, 
    #7ab800 0%,
    #0085c3 35%,
    #f2af00 50%,
    #ce1126 65%,
    #6e2585 100%);
  border-image: linear-gradient(
    top, 
    #7ab800 0%, 
    #0085c3 35%, 
    #f2af00 50%, 
    #ce1126 65%, 
    #6e2585 100%);
  border-image-slice: 1;
  position: relative;
  top: 5%;
  left: 50%;
  perspective: 2000px
}

#timeline ul li:after
{
  content: "\2713";
  font-family: fontawesome;
  display:block;
  width: 35px;
  height: 35px;
  border-radius: 50%;
  font-weight: 100;
  font-size: 90%;
  line-height:35px;
  text-align: center;
  background-color: #7ab800;
  color: #fff;
  position:absolute;
  -webkit-transition: transform 1s linear;
  transition: transform 1s linear
}

#timeline ul li:nth-child(2):after
{
  background-color: #0085c3;
}

#timeline ul li:nth-child(3):after
{
  content: "\f11d";
  background-color: #f2af00;
}

#timeline ul li:nth-child(4):after
{
  content: "\f11d";
  background-color: #ce1126
}

#timeline ul li:last-child:after
{
  content: "\f11d";
  background-color: #6e2585
}

#timeline ul li .cont
{
  width: 400px;
  height: 110px;
  padding: 25px 10px 10px;
  border: 2px solid transparent;
  border-radius: 4px;
  -webkit-transform: translate(0, -55px);
  transform: translate(0, -55px);
  text-transform: capitalize;
  line-height: 150%;
  font-size: 120%;
  font-family: 'Montserrat', sans-serif;
  position: absolute;
  top: 22px
}

#timeline ul li:nth-child(odd) .cont
{
  -webkit-transform-origin: left;
  transform-origin: left;
  -webkit-transition: transform 1.5s linear;
  transition: transform 1.5s linear
}

#timeline ul li:nth-child(even) .cont
{
  -webkit-transform-origin: right;
  transform-origin: right;
  -webkit-transition: transform 1.5s linear;
  transition: transform 1.5s linear
}

#timeline ul li:first-child .cont
{
  color: #7ab800
}

#timeline ul li:nth-child(2) .cont
{
  color: #0085c3
}

#timeline ul li:nth-child(3) .cont
{
  color: #f2af00
}

#timeline ul li:nth-child(4) .cont
{
  color: #ce1126
}

#timeline ul li:last-child .cont
{
  color: #6e2585
}

#timeline ul li:nth-child(odd):hover .cont
{
  text-align: left;
  -webkit-transform: rotateY(-175deg) translate3d(60px,-50px,5px);
  transform: rotateY(-175deg) translate3d(60px,-50px,5px);
  -webkit-transition: transform 1.5s linear;
  transition: transform 1.5s linear;
}

#timeline ul li:nth-child(even):hover .cont
{
  text-align: left;
  -webkit-transform: rotateY(175deg) translate3d(-60px,-50px,5px);
  transform: rotateY(175deg) translate3d(-60px,-50px,5px);
  -webkit-transition: transform 1.5s linear;
  transition: transform 1.5s linear
}

#timeline ul li:nth-child(odd):hover .cont p,
#timeline ul li:nth-child(odd):hover .cont h3
{
  -webkit-transform: rotateY(-175deg);
  transform: rotateY(-175deg)
}

#timeline ul li:nth-child(even):hover .cont p,
#timeline ul li:nth-child(even):hover .cont h3
{
  -webkit-transform: rotateY(175deg);
  transform: rotateY(175deg)
}

#timeline ul li:nth-child(2) .cont time{background-color: #0085C3}

#timeline ul li:nth-child(3) .cont time{background-color: #F2AF00}

#timeline ul li:nth-child(4) .cont time{background-color: #CE1126}

#timeline ul li:last-child .cont time{background-color: #6E2585}

#timeline ul li:nth-child(odd):hover .cont time
{
  -webkit-transform: rotateY(-175deg);
  transform: rotateY(-175deg)
}

#timeline ul li:nth-child(even):hover .cont time
{
  -webkit-transform: rotateY(175deg);
  transform: rotateY(175deg)
}

#timeline ul li .cont p{display: block}

#timeline ul li:nth-child(n+1):after{left: -18px}

#timeline ul li:first-child:after,
#timeline ul li:first-child .cont
{
  top: 8%
}

#timeline ul li:nth-child(2):after,
#timeline ul li:nth-child(2) .cont
{
  top: 28%
}

#timeline ul li:nth-child(3):after,
#timeline ul li:nth-child(3) .cont
{
  top: 48%
}

#timeline ul li:nth-child(4):after,
#timeline ul li:nth-child(4) .cont
{
  top: 68%
}

#timeline ul li:last-child:after,
#timeline ul li:last-child .cont
{
  top: 88%
}

#timeline ul li:nth-child(n+1):hover:after
{
  -webkit-transform: rotateZ(360deg);
  transform: rotateZ(360deg);
  -webkit-transition: transform 1s linear;
  transition: transform 1s linear
}

#timeline ul li:first-child .cont{ border-color: #7ab800}

#timeline ul li:nth-child(2) .cont{ border-color: #0085c3}

#timeline ul li:nth-child(3) .cont{ border-color: #f2af00}

#timeline ul li:nth-child(4) .cont{ border-color: #ce1126}

#timeline ul li:last-child .cont{ border-color: #6e2585}

#timeline ul li:nth-child(odd) .cont{left: 30px}

#timeline ul li:nth-child(even) .cont{left: -435px}

#timeline ul li .cont:before,
#timeline ul li .cont:after
{
  content: "";
  display: block;
  width: 0 ;
  height: 0;
  position: absolute;
  border-style: solid;
}

#timeline ul li:nth-child(odd) .cont:before
{
  border-width: 11px 11px 11px 0 ;
}

#timeline ul li:nth-child(even) .cont:before
{
  border-width: 11px 0 11px 11px
}

#timeline ul li:nth-child(odd) .cont:after
{
  border-width: 10px 10px 10px 0
}

#timeline ul li:nth-child(even) .cont:after
{
  border-width: 10px 0 10px 10px
}

#timeline ul li:nth-child(odd) .cont:before
{
  top: 50%;
  left: -11px;
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%)
}

#timeline ul li:nth-child(even) .cont:before
{
  top: 50%;
  right: -11px;
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%)
}

#timeline ul li:first-child .cont:before
{
  border-color: transparent #7ab800 transparent transparent
}

#timeline ul li:nth-child(2) .cont:before
{
  border-color: transparent transparent transparent #0085c3
}

#timeline ul li:nth-child(3) .cont:before
{
  border-color: transparent #f2af00 transparent transparent
}

#timeline ul li:nth-child(4) .cont:before
{
  border-color: transparent transparent transparent #ce1126
}

#timeline ul li:last-child .cont:before
{
  border-color: transparent #6e2585 transparent transparent
}

#timeline ul li:nth-child(odd) .cont:after
{
  border-color: transparent #222223;
  top: 50%;
  left: -9px;
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%)
}

#timeline ul li:nth-child(even) .cont:after
{
  border-color: transparent #222223;
  top: 50%;
  right: -9px;
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%)
}

#timeline ul li .cont time
{
  width: 100px;
  height: 30px;
  position: absolute;
  top: -15px;
  left: calc(100%/2 - 50px);
  background-color: #7AB800;
  color: #f5f5f5;
  line-height: 30px;
  text-align: center;
  border-radius: 3px
}

.titulo
{
  text-align: center;
  text-transform: uppercase;
 
}

.titulo h2
{
  color: #000000;
  text-transform: capitalize;
  position: relative;
  top: -940px;
  left: -350px;
  font-family: 'Lato', sans-serif;
  font-family: 'Oswald', sans-serif;
  font-size: 35px;
}

@media screen and (max-width: 600px)
{
  #timeline ul li .cont
  {
    width: 120px;
    line-height: 120%
  }
  
  #timeline ul li:nth-child(even) .cont{left: -175px}
  
  #timeline ul li .cont p,
  #timeline ul li .cont time
  {
    font-size: 76%
  }
  
  #timeline ul li .cont time
  {
    width: 80px;
    left: calc(100%/2 - 40px)
  }
}
  </style>
</head>
<body>
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
<section id= "timeline">
    <ul class= "line">
      <li>
        <div class="cont">
            <h3>SENA</h3>
          <p>
            Diseño e Integrcion de Multimedia
          </p>
          <time>2019</time>
        </div>
      </li>
      <li>
        <div class="cont">
            <h3>Academia Superior</h3>
          <p>
            Tecnico en Cosmetologia y Estilista
          </p>
          <time>2021</time>
        </div>
      </li>
      <li>
        <div class="cont">
            <h3>Coursera</h3>
          <p>
            Curso Business Transformation With Google Cold
          </p>
          <time>2022</time>
        </div>
      </li>
      <li>
        <div class="cont">
            <h3>Coursera</h3>
          <p>
            Curso Conceptos Basicos de Excel para Analisis de Datos
          </p>
          <time>2022</time>
        </div>
      </li>
      <li>
        <div class="cont">
          <h3>Universidad Uniminuto</h3>
          <p>
            Actualmente Estudiante de Ingeria de Sistemas
          </p>
          <time>2024</time>
        </div>
      </li>
    </ul>
    <div class="titulo">
        <h2>Mis Estudios</h2>
    </div>
  </section>
</body>
</html>
   
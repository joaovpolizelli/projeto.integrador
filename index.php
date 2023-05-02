<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="icon" href="img/icone.png" type="image/x-icon">
</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top bg-danger">
<div class="container-fluid">
  <a class="navbar-brand bg-gradient-danger" href="#">Barber $hop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse k navbar-collapse" id="navbarNavDarkDropdown">
    <ul class="navbar-nav mx-auto">
        <li class="nav-item me-5">
          <a class="nav-link active home me-5" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link bg-gradient-danger me-5" href="#">Agendar</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link bg-gradient-danger me-5" href="#">Quem Somos</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link bg-gradient-danger me-5" href="#">Serviços</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mais" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mais
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Contato</a></li>
            <li><a class="dropdown-item" href="#">Galeria</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br><br>

<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/barber-shop.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/barber-shop1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="imagemQuemSomos mt-5">

<img src="img/quemsomos.jpg" class="img-fluid mt-5" style="object-fit: cover; height: auto; width: 40%; left: 5%; position: absolute;" alt="...">

<span class="QuemSomos mt-5" style="font-size: 7vw; position: absolute; left: 52%; color: black;">QUEM SOMOS</span> 

<br><br>

<div>
<p class="textoQuemSomos" style="position: absolute; left: 51%; margin-top: 25%; color: black; font-size: 1vw;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia inventore temporibus <br> nostrum quas aperiam doloremque labore consequatur, velit porro dolorum earum as <br><br> ad ipsum possimus repellendus rerum nobis magni suscipit. Lorem ipsum dolor sit lers<br> amet, consectetur adipisicing elit. Error non neque impedit dolor ducimus perspiciatisy <br><br> tenetur eligendi itaque eius aperiam rem dignissimos omnis nostrum, earum soluta, ary <br> modi assumenda quaerat rerum? Lorem ipsum dolor sit amet, consectetur adipisicing <br> elit. Ad sed, recusandae assumenda asperiores vero quae, corrupti unde accusantium <br> aperiam, maiores maxime nostrum dolorem totam beatae in reiciendis hic delectus <br> natus.</p>
</div>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
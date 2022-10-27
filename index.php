<!doctype html>
<html lang="pt-br" class="h-175 w-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>StarSat - Página Inicial</title>
  </head>
  
  <body class="d-flex h-100 text-white " id="back" style="background: linear-gradient(180deg, rgba(255, 138, 0, 0.25) 33.5%, rgba(0, 0, 0, 0) 100%), #50006C;
">
  <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <?php require ('./src/packages/navbar.php') ?>

</header>
<section class="">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./src/imgs/banner01.svg" class="rounded" alt="">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
    <img src="./src/imgs/banner03.svg" class="rounded" alt="" >
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<br>
<br>
<section class="text-center" id="sobrenos">
  <h2 class="mx-auto">Quem somos?</h2>
  <p>A StarSat surgiu da ideia de proporcionar um serviço de TV por asinatura e streaming de filmes/séries por um valor justo, acessível e sem fidelidade.</p>
</section>
<br>
<br>


<section id="valores">
<br>
<br>



<main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center text-dark">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="background-color: #FFCFF7;">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Basic</h4>
          </div>
          <div class="card-body text-dark">
            <h1 class="card-title pricing-card-title">R$25<small class="text-muted fw-light">/mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>1 ponto</li>
              <li>Streaming 4K</li>
              <li><strong>Filmes e séries ilimitados</strong></li>
              <li>Suporte 24/7</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg text-light" id="btn-contrat"><strong>Contratar</strong></button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="background-color: #FFCFF7;">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Premium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$30<small class="text-muted fw-light">/mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>1 Ponto</li>
              <li>Streaming 4K</li>
              <li><strong>Canais, Filmes e Séries</strong></li>
              <li>Suporte 24/7</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg text-light" id="btn-contrat"><strong>Contratar</strong></button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary" style="background-color: #FFCFF7;">
          <div class="card-header py-3 text-white " style="background: linear-gradient(270.15deg, rgba(0, 26, 255, 0.25) 11.24%, rgba(0, 0, 0, 0) 100.49%), #CE8CA5;">
            <h4 class="my-0 fw-normal">Master</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$35<small class="text-muted fw-light">/mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>1 Ponto</li>
              <li>Streaming 4K</li>
              <li><strong>Canais, Filmes, Séries, Adultos e Internacionais</strong></li>
              <li>Suporte 24/7</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg text-light" id="btn-contrat"><strong>Contratar</strong></button>
          </div>
        </div>
      </div>
    </div>
    <h2 class="display-6 text-center mb-4">Compare os planos</h2>

    <div class="table-responsive">
      <table class="table text-center text-light">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Basic</th>
            <th style="width: 22%;">Premium</th>
            <th style="width: 22%;">Master</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Apps Exclusivos</th>
            <td><i class="bi bi-check-lg"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Suporte 24/7</th>
            <td><i class="bi bi-check-lg"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Canais livres e pagos</th>
            <td></td>
            <td><i class="bi bi-check-lg"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Filmes e Séries</th>
            <td><i class="bi bi-check-lg"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Canais Exclusivos</th>
            <td></td>
            <td></td>
            <td><i class="bi bi-check-lg"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Premiere, Esportes, Telecine, Pay Per View</th>
            <td></td>
            <td><i class="bi bi-check-lg"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Adultos e Internacionais</th>
            <td></td>
            <td></td>
            <td><i class="bi bi-check-lg"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main> 
</main>
</section>
<section id="testes" class="text-center">
<h2>Gostou? Vamos testar!</h2>
<p>A StarSat oferece a todos usuários um teste totalmente gratuíto de 3 horas para você ter certeza de que está escolhendo certo!</p>
<button class="btn text-light" id="requestTest">Teste já</button>
</section>
<br>
<br>
<section id="revendas" class="text-center">
    <h2>Quer trabalhar conosco? Entre em contato!</h2>
    <p>Nós da StarSat nos alegramos em ver que cada vez mais pessoas se interessam em trabalhar junto ao nosso time! Então se você faz parte dessas pessoas e quer ser um revendedor StarSat, entre em contato conosco!</p>
    <button class="btn text-light" id="requestTest">Entre em contato</button>
</section>
<br>
<br>
<footer class="footer navbar-fixed-bottom">
<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Início</a></li>
      <li class="nav-item"><a href="#sobrenos" class="nav-link px-2 text-light">Sobre nós</a></li>
      <li class="nav-item"><a href="#valores" class="nav-link px-2 text-light">Valores</a></li>
      <li class="nav-item"><a href="#testes" class="nav-link px-2 text-light">Testes</a></li>
      <li class="nav-item"><a href="#revendas " class="nav-link px-2 text-light">Revendas</a></li>
    </ul>
    <p class="text-center text-light">&copy; <strong>2022 StarSat</strong></p>
  </footer>
</div>
</footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
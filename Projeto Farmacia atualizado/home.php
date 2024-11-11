<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/online-pharmacy-system-main/styles/settings/color.css">
    <link rel="stylesheet" href="/online-pharmacy-system-main/styles/settings/text.css">

    <link rel="stylesheet" href="/online-pharmacy-system-main/styles/components/fm-navbar.css">
    <link rel="stylesheet" href="/online-pharmacy-system-main/styles/components/fm-login.css">
    <link rel="stylesheet" href="/online-pharmacy-system-main/styles/components/fm-carrinho.css">
    <link rel="stylesheet" href="/online-pharmacy-system-main/styles/components/fm-produtos.css">

    <script src="finalizar-compra.js"></script>

    <script src="carrinho.js"></script>
<body>
    <div class="fm-navbar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <img src="/online-pharmacy-system-main/assets/logo/Farmaconde Logo - Email Signature.png" style=" width: 250px;" alt="">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Meus Pedidos</a>
                    </li>
                    <li class="nav-item">
                      <button class="btn btn-primary" id="open-carrinho-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Carrinho</button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:5500/login.html">Minha conta</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="O que está buscando?" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                  </button>
                </form>
              </div>
            </div>
          </nav>
    </div>

    <form action="checkout.php" class="fm-carrinho">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Carrinho</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <?php include 'get-carrinho.php'; ?>
        </div>

        <div class="finalizar-compra">
            <button class="finalizar-compra-btn" id="finalizar-compra-btn" type="submit">Finalizar Compra</button>
        </div>
    </div>
</form>

    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner" style="height: 400px; width: 100%;">
        <div class="carousel-item active" style="height: 400px;">
          <img style="height: 350px;" src="/online-pharmacy-system-main/assets/images/Prancheta 5.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" style="height: 400px;">
          <img style="height: 350px;" src="/online-pharmacy-system-main/assets/images/Prancheta 6.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img style="height: 350px;" src="/online-pharmacy-system-main/assets/images/paisagem-da-praia-de-railay-ao-nascer-do-sol-em-krabi-tailandia.jpg" class="d-block w-100" alt="...">
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

    <div class="fm-produtos" action="carrinho.php">
      <?php include 'get-produtos.php'; ?>
    </div>

</body>
</html>
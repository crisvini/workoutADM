<?php

class Componentes
{
    public static function head($pageName)
    {
        echo '<head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <!-- JS -->
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
              <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
              <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
              <script src="./js/functions.js"></script>
              <!-- CSS -->
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
              <link rel="stylesheet" href="./css/style.css?' . time() . '">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
              <!-- Fontes -->
              <link rel="preconnect" href="https://fonts.googleapis.com">
              <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
              <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
              <link rel="preconnect" href="https://fonts.googleapis.com">
              <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
              <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
              <title>Workout ADM > ' . $pageName . '</title>
              </head>';
    }

    public static function header($activePage)
    {
        $activeClass1 = '';
        $activeClass2 = '';
        $activeClass3 = '';
        $activeClass4 = '';
        if ($activePage == 'index.php') $activeClass1 = 'active-menu';
        else if ($activePage == 'metas.php') $activeClass2 = 'active-menu';
        else if ($activePage == 'treinos.php') $activeClass3 = 'active-menu';
        else if ($activePage == 'usuarios.php') $activeClass4 = 'active-menu';
        echo '  <header class="bg-gray sticky-top">
                    <nav class="container navbar navbar-expand-lg bg-gray">
                        <div class="container-fluid">
                            <a class="navbar-brand color-pink fw-bold fs-3 logo-font" href="./home.php">ADM
                                Workout&nbsp;<i class="fa-solid fa-dumbbell"></i></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 ms-5 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link color-pink fw-semibold ' . $activeClass1 . '" href="./home.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link color-pink fw-semibold ' . $activeClass2 . '" href="./metas.php">Metas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link color-pink fw-semibold ' . $activeClass3 . '" href="./treinos.php">Treinos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link color-pink fw-semibold ' . $activeClass4 . '" href="./usuarios.php">Usuários</a>
                                    </li>
                                </ul>
                                <span class="color-pink fw-semibold pink-hover" style="cursor: pointer;" onclick="logout();">Sair&nbsp;<i class="fa-solid fa-right-from-bracket"></i></span>
                            </div>
                        </div>
                    </nav>
                </header>';
    }
}

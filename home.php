<?php
include("./class/Componentes.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php Componentes::head("Home"); ?>

<body class="bg-black">

    <?php Componentes::header("index.php"); ?>

    <main class="mb-5">
        <div class="container mt-4">
            <div class="row">
                <div class="col-6">
                    <div class="bg-gray w-100 br-10 p-2 cursor-pointer" onclick="window.location.href='./metas.php';">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                            <p class="fs-5 color-white fw-semibold">Metas&nbsp;
                            </p>
                            <i class="fs-5 color-pink fw-semibold fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-gray w-100 br-10 p-2 cursor-pointer" onclick="window.location.href='./objetivos.php';">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                            <p class="fs-5 color-white fw-semibold">Objetivos&nbsp;
                            </p>
                            <i class="fs-5 color-pink fw-semibold fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <div class="bg-gray w-100 br-10 p-2 cursor-pointer" onclick="window.location.href='./fichas.php';">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                            <p class="fs-5 color-white fw-semibold">Fichas&nbsp;
                            </p>
                            <i class="fs-5 color-pink fw-semibold fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-gray w-100 br-10 p-2 cursor-pointer" onclick="window.location.href='./exercicios.php';">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                            <p class="fs-5 color-white fw-semibold">Exercícios&nbsp;
                            </p>
                            <i class="fs-5 color-pink fw-semibold fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
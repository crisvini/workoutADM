<?php
include("./class/Componentes.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php Componentes::head("Home"); ?>

<body class="bg-black">

    <?php Componentes::header("index.php"); ?>

    <main class="mb-5">
        <div class="container mt-4">
            <div class="row">
                <div class="col-6">
                    <div class="bg-gray w-100 br-10 p-2" style="cursor: pointer;" onclick="window.location.href='./metas.php';">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                            <p class="fs-5 color-white fw-semibold">Metas&nbsp;<i class="fa-solid fa-list-check"></i>
                            </p>
                            <i class="fs-5 color-pink fw-semibold fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-gray w-100 br-10 p-2" style="cursor: pointer;" onclick="window.location.href='./treinos.php';">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                            <p class="fs-5 color-white fw-semibold">Treinos&nbsp;<i class="fa-solid fa-dumbbell"></i>
                            </p>
                            <i class="fs-5 color-pink fw-semibold fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="bg-gray w-100 br-10 p-2" style="cursor: pointer;" onclick="window.location.href='./usuarios.php';">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                            <p class="fs-5 color-white fw-semibold">Usuários&nbsp;<i class="fa-solid fa-user"></i></p>
                            <i class="fs-5 color-pink fw-semibold fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
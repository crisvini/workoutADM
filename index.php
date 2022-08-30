<?php
include("./class/Componentes.php");
// Limpa a session
$_SESSION = [];
?>

<!DOCTYPE html>
<html lang="en">

<?php Componentes::head("Login"); ?>

<body class="bg-black">

    <div class="d-flex aligns-items-center justify-content-center vh-100">
        <div class="bg-gray br-10 color-pink align-self-center w-25 text-center p-3">
            <p class="navbar-brand color-pink fw-bold fs-3 logo-font" href="./home.php">ADM
                Workout&nbsp;<i class="fa-solid fa-dumbbell"></i></p>
            <div>
                <div class="form-floating w-100 mt-4 text-start">
                    <input type="email" class="form-control fw-normal br-10 fs-6 bg-medium-gray border-black color-white" placeholder="E-mail">
                    <label class="color-white fw-semibold">E-mail</label>
                </div>
                <div class="form-floating w-100 mt-2 text-start">
                    <input type="password" class="form-control fw-normal br-10 fs-6 bg-medium-gray border-black color-white" placeholder="Senha">
                    <label class="color-white fw-semibold">Senha</label>
                </div>
                <div class="w-100 mt-4">
                    <button type="button" class="btn w-100 h-100 btn-pink fs-6">Entrar</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
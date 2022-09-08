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
            <div class="form-floating w-100 mt-4 text-start">
                <input type="email" class="form-control fw-normal br-10 fs-6 bg-medium-gray border-black color-white" name="email" placeholder="E-mail" id="email">
                <label class="color-white fw-semibold" id="labelEmail">E-mail</label>
            </div>
            <div class="form-floating w-100 mt-2 text-start">
                <input type="password" class="form-control fw-normal br-10 fs-6 bg-medium-gray border-black color-white" name="senha" placeholder="Senha" id="senha">
                <label class="color-white fw-semibold" id="labelSenha">Senha</label>
            </div>
            <div class="w-100 mt-4">
                <button type="button" class="btn w-100 h-100 btn-pink fs-6" id="btn_login">Entrar</button>
            </div>
        </div>
    </div>

    <script>
        var email = document.getElementById("email");
        var senha = document.getElementById("senha");

        document.getElementById("btn_login").addEventListener('click', () => {
            var formData = new FormData();
            formData.set('email', email.value);
            formData.set('senha', senha.value);

            fetch('./ajax/login.php', {
                method: 'POST',
                body: formData
            }).then(response => response.text()).then(function(text) {
                if (text == 1)
                    window.location.href = "./home.php";
                else {
                    limpaCampos(["#email", "#senha"]);
                    alertaPreenchimento([
                        ["#email", "#labelEmail"],
                        ["#senha", "#labelSenha"]
                    ]);
                    Swal.fire({
                        title: "E-mail e/ou senha inválidos!",
                        icon: "warning",
                        confirmButtonText: "Ok",
                        background: "#191919",
                        customClass: {
                            confirmButton: "btn-pink",
                            title: "color-white",
                        },
                    });
                }
            });
        });
    </script>

</body>

</html>
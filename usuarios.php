<?php
include("./class/Componentes.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php Componentes::head("Usuários"); ?>

<body class="bg-black">

    <?php Componentes::header("usuarios.php"); ?>

    <main class="mb-5">
        <div class="container mt-4 bg-gray p-4 br-10">
            <div class="row">
                <div class="col-12">
                    <div class="w-100 br-10">
                        <p class="fs-3 color-pink fw-semibold">Buscar usuários&nbsp;<i class="fa-solid fa-magnifying-glass"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="bg-black w-100 br-10 p-2">
                        <div class="row mx-1 my-2">
                            <div class="col-5">
                                <div class="form-floating">
                                    <input type="text" class="form-control fw-normal fs-5 bg-gray border-black color-white" placeholder="Nome" id="nome">
                                    <label class="color-white fw-semibold" id="labelNome">Nome</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control fw-normal fs-5 bg-gray border-black color-white" placeholder="CPF" id="cpf">
                                    <label class="color-white fw-semibold" id="labelCpf">CPF</label>
                                </div>
                            </div>
                            <div class="col-3 ms-auto">
                                <button type="button" class="btn w-100 h-100 btn-pink fs-6" id="btn_buscar">Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4 bg-gray p-4 br-10">
            <div class="row">
                <div class="col-12">
                    <div class="w-100 br-10">
                        <p class="fs-3 color-pink fw-semibold">Usuários</p>
                    </div>
                </div>
            </div>
            <div id="div_usuarios">
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="bg-black w-100 br-10 p-2">
                            <div class="row mx-1">
                                <div class="col-7">
                                    <p class="fs-5 color-white fw-semibold">Nome</p>
                                </div>
                                <div class="col-4">
                                    <p class="fs-5 color-white fw-semibold">CPF</p>
                                </div>
                                <div class="col-1 text-center align-self-end">
                                    <p class="fs-5 color-white fw-semibold">Deletar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="bg-medium-gray w-100 br-10 p-2">
                            <div class="row mx-1">
                                <div class="col-7">
                                    <p class="fs-5 color-white fw-normal">Cristian</p>
                                </div>
                                <div class="col-4">
                                    <p class="fs-5 color-white fw-normal">444.252.888-82</p>
                                </div>
                                <div class="col-1 text-center align-self-end">
                                    <i class="fs-5 color-pink fw-semibold fa-solid fa-trash-can pink-hover cursor-pointer"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="bg-medium-gray w-100 br-10 p-2">
                            <div class="row mx-1">
                                <div class="col-7">
                                    <p class="fs-5 color-white fw-normal">Murilo</p>
                                </div>
                                <div class="col-4">
                                    <p class="fs-5 color-white fw-normal">021.581.220-48</p>
                                </div>
                                <div class="col-1 text-center align-self-end">
                                    <i class="fs-5 color-pink fw-semibold fa-solid fa-trash-can pink-hover cursor-pointer"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        window.addEventListener("load", function() {
            $("#cpf").mask("000.000.000-00");
        });

        document.getElementById("btn_buscar").addEventListener('click', () => {
            if ((document.querySelector("#nome").value == "" && document.querySelector("#cpf").value == "") ||
                document.querySelector("#cpf").value.length < 14 && document.querySelector("#cpf").value.length > 1) {
                Swal.fire({
                    title: "Campos imcompletos!",
                    icon: "warning",
                    confirmButtonText: "Ok",
                    background: "#191919",
                    customClass: {
                        confirmButton: "btn-pink",
                        title: "color-white",
                    },
                }).then(function() {
                    limpaCampos(["#nome", "#cpf"]);
                    alertaPreenchimento([
                        ["#nome", "#labelNome"],
                        ["#cpf", "#labelCpf"]
                    ]);
                });
            } else {
                var formData = new FormData();
                formData.set('email', document.querySelector("#email").value);
                formData.set('cpf', document.querySelector("#cpf").value);

                fetch('./ajax/buscaUsuarios.php', {
                    method: 'POST',
                    body: formData
                }).then(response => response.text()).then(function(text) {
                    document.querySelector("#div_usuarios").innerHTML = text;
                });
            }
        });
    </script>

</body>

</html>
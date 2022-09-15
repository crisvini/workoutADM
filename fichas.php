<?php
include("./class/Componentes.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php Componentes::head("Fichas"); ?>

<body class="bg-black">

    <?php Componentes::header("fichas.php"); ?>

    <main class="mb-5">
        <div class="container mt-4 bg-gray p-4 br-10">
            <div class="row">
                <div class="col-12">
                    <div class="w-100 br-10">
                        <p class="fs-3 color-pink fw-semibold">Criar novo objetivo&nbsp;<i class="fa-solid fa-plus"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="bg-black w-100 br-10 p-2">
                        <div class="row mx-1 my-2">
                            <div class="col-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control fw-normal fs-5 bg-medium-gray border-black color-white" placeholder="Nome" id="nome">
                                    <label class="color-white fw-semibold" id="labelNome">Nome</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control fw-normal fs-5 bg-medium-gray border-black color-white" placeholder="Descrição" id="descricao">
                                    <label class="color-white fw-semibold" id="labelDescricao">Descrição</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-floating">
                                    <input type="number" class="form-control fw-normal fs-5 bg-medium-gray border-black color-white" placeholder="Séries" id="series">
                                    <label class="color-white fw-semibold" id="labelSeries">Séries</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-1 mt-4 mb-2">
                            <div class="col-2">
                                <div class="form-floating">
                                    <input type="number" class="form-control fw-normal fs-5 bg-medium-gray border-black color-white" placeholder="Repetições" id="repeticoes">
                                    <label class="color-white fw-semibold" id="labelRepeticoes">Repetições</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-floating">
                                    <select class="form-control fw-normal fs-5 bg-medium-gray border-black color-white" placeholder="Treino" id="treino">
                                        <option value="" selected disabled>Selecione</option>
                                        <option value="Emagrecimento">Emagrecimento</option>
                                        <option value="Hipertrofia">Hipertrofia</option>
                                    </select>
                                    <label class="color-white fw-semibold" id="labelTreino">Treino</label>
                                </div>
                            </div>
                            <div class="col-3 ms-auto">
                                <button type="button" class="btn w-100 h-100 btn-pink fs-6" id="btn_incluir">Incluir</button>
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
                        <p class="fs-3 color-pink fw-semibold">Treinos ativos</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="bg-medium-gray w-100 br-10 p-2">
                        <div class="row mx-1">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="w-100 br-10">
                                            <p class="fs-4 color-pink fw-bold">Emagrecimento</p>
                                        </div>
                                    </div>
                                    <div class="col-2 text-end">
                                        <div class="w-100 br-10">
                                            <p class="fs-4 color-pink fw-bold"><i class="fa-solid fa-chevron-down cursor-pointer pink-hover d-none" id="chevron_emagrecimento_down"></i></p>
                                            <p class="fs-4 color-pink fw-bold"><i class="fa-solid fa-chevron-up cursor-pointer pink-hover" id="chevron_emagrecimento_up"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="slide_emagrecimento">
                            <div class="col-12">
                                <div class="w-100 br-10 px-2 py-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="bg-black w-100 br-10 p-2">
                                                <div class="row mx-1">
                                                    <div class="col-8 p-0">
                                                        <p class="fs-5 color-white fw-normal">Exercício</p>
                                                    </div>
                                                    <div class="col-3 p-0 text-start">
                                                        <p class="fs-5 color-white fw-normal">Repetições</p>
                                                    </div>
                                                    <div class="col-1 p-0 text-center align-self-end">
                                                        <p class="fs-5 color-white fw-normal">Deletar</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="bg-gray w-100 br-10 p-2">
                                                <div class="row mx-1">
                                                    <div class="col-8 p-0">
                                                        <p class="fs-6 color-white fw-normal">Supino reto (barra)</p>
                                                    </div>
                                                    <div class="col-3 p-0 text-start">
                                                        <p class="fs-6 color-white fw-normal">4x 12</p>
                                                    </div>
                                                    <div class="col-1 p-0 text-center align-self-end">
                                                        <i class="fs-5 color-pink fw-semibold fa-solid fa-trash-can pink-hover cursor-pointer"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="bg-gray w-100 br-10 p-2">
                                                <div class="row mx-1">
                                                    <div class="col-8 p-0">
                                                        <p class="fs-6 color-white fw-normal">Supino inclinado (barra)</p>
                                                    </div>
                                                    <div class="col-3 p-0 text-start">
                                                        <p class="fs-6 color-white fw-normal">4x 12</p>
                                                    </div>
                                                    <div class="col-1 p-0 text-center align-self-end">
                                                        <i class="fs-5 color-pink fw-semibold fa-solid fa-trash-can pink-hover cursor-pointer"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-medium-gray w-100 br-10 p-2 mt-3">
                        <div class="row mx-1">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="w-100 br-10">
                                            <p class="fs-4 color-pink fw-bold">Hipertrofia</p>
                                        </div>
                                    </div>
                                    <div class="col-2 text-end">
                                        <div class="w-100 br-10">
                                            <p class="fs-4 color-pink fw-bold"><i class="fa-solid fa-chevron-down cursor-pointer pink-hover d-none" id="chevron_hipertrofia_down"></i></p>
                                            <p class="fs-4 color-pink fw-bold"><i class="fa-solid fa-chevron-up cursor-pointer pink-hover" id="chevron_hipertrofia_up"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="slide_hipertrofia">
                            <div class="col-12">
                                <div class="w-100 br-10 px-2 py-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="bg-black w-100 br-10 p-2">
                                                <div class="row mx-1">
                                                    <div class="col-8 p-0">
                                                        <p class="fs-5 color-white fw-normal">Exercício</p>
                                                    </div>
                                                    <div class="col-3 p-0 text-start">
                                                        <p class="fs-5 color-white fw-normal">Repetições</p>
                                                    </div>
                                                    <div class="col-1 p-0 text-center align-self-end">
                                                        <p class="fs-5 color-white fw-normal">Deletar</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="bg-gray w-100 br-10 p-2">
                                                <div class="row mx-1">
                                                    <div class="col-8 p-0">
                                                        <p class="fs-6 color-white fw-normal">Supino reto (barra)</p>
                                                    </div>
                                                    <div class="col-3 p-0 text-start">
                                                        <p class="fs-6 color-white fw-normal">4x 12</p>
                                                    </div>
                                                    <div class="col-1 p-0 text-center align-self-end">
                                                        <i class="fs-5 color-pink fw-semibold fa-solid fa-trash-can pink-hover cursor-pointer"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="bg-gray w-100 br-10 p-2">
                                                <div class="row mx-1">
                                                    <div class="col-8 p-0">
                                                        <p class="fs-6 color-white fw-normal">Supino inclinado (barra)</p>
                                                    </div>
                                                    <div class="col-3 p-0 text-start">
                                                        <p class="fs-6 color-white fw-normal">4x 12</p>
                                                    </div>
                                                    <div class="col-1 p-0 text-center align-self-end">
                                                        <i class="fs-5 color-pink fw-semibold fa-solid fa-trash-can pink-hover cursor-pointer"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        $("#chevron_emagrecimento_up, #chevron_emagrecimento_down, #chevron_hipertrofia_up, #chevron_hipertrofia_down").click(function() {
            if ($(this).attr("id") == "chevron_emagrecimento_up") {
                $("#slide_emagrecimento").slideToggle();
                $("#chevron_emagrecimento_up").addClass("d-none");
                $("#chevron_emagrecimento_down").removeClass("d-none");
            }
            if ($(this).attr("id") == "chevron_emagrecimento_down") {
                $("#slide_emagrecimento").slideToggle();
                $("#chevron_emagrecimento_down").addClass("d-none");
                $("#chevron_emagrecimento_up").removeClass("d-none");
            }
            if ($(this).attr("id") == "chevron_hipertrofia_up") {
                $("#slide_hipertrofia").slideToggle();
                $("#chevron_hipertrofia_up").addClass("d-none");
                $("#chevron_hipertrofia_down").removeClass("d-none");
            }
            if ($(this).attr("id") == "chevron_hipertrofia_down") {
                $("#slide_hipertrofia").slideToggle();
                $("#chevron_hipertrofia_down").addClass("d-none");
                $("#chevron_hipertrofia_up").removeClass("d-none");
            }
        });

        document.getElementById("btn_incluir").addEventListener('click', () => {
            var formData = new FormData();
            formData.set('nome', document.querySelector("#nome").value);
            formData.set('descricao', document.querySelector("#descricao").value);
            formData.set('series', document.querySelector("#series").value);
            formData.set('repeticoes', document.querySelector("#repeticoes").value);
            formData.set('treino', document.querySelector("#treino").value);

            fetch('./ajax/alteraExercicios.php', {
                method: 'POST',
                body: formData
            }).then(response => response.text()).then(function(text) {
                if (text == 1) {
                    limpaCampos(["#nome", "#descricao", "#series", "#repeticoes", "#treino"]);
                    Swal.fire({
                        title: "Exercício incluído com sucesso!",
                        icon: "success",
                        confirmButtonText: "Ok",
                        background: "#191919",
                        customClass: {
                            confirmButton: "btn-pink",
                            title: "color-white",
                        },
                    });
                } else {
                    limpaCampos(["#nome", "#descricao", "#series", "#repeticoes", "#treino"]);
                    alertaPreenchimento([
                        ["#nome", "#labelNome"],
                        ["#descricao", "#labelDescricao"],
                        ["#series", "#labelSeries"],
                        ["#repeticoes", "#labelRepeticoes"],
                        ["#treino", "#labelTreino"]
                    ]);
                    Swal.fire({
                        title: "Preencha os dados corretamente!",
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
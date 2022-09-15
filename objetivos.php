<?php
include("./class/Componentes.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php Componentes::head("Objetivos"); ?>

<body class="bg-black">

    <?php Componentes::header("objetivos.php"); ?>

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
                            <div class="col-5">
                                <div class="form-floating">
                                    <input type="text" class="form-control fw-normal fs-5 bg-medium-gray border-black color-white" placeholder="Descrição" id="descricao">
                                    <label class="color-white fw-semibold" id="labelDescricao">Valor</label>
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
                        <p class="fs-3 color-pink fw-semibold">Objetivos</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="bg-black w-100 br-10 p-2">
                        <div class="row mx-1">
                            <div class="col-8">
                                <p class="fs-5 color-white fw-semibold">Nome</p>
                            </div>
                            <div class="col-3 text-start">
                                <p class="fs-5 color-white fw-semibold">Valor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="bg-medium-gray w-100 br-10 p-2">
                        <div class="row mx-1">
                            <div class="col-8">
                                <p class="fs-5 color-white fw-normal">Hipertrofia</p>
                            </div>
                            <div class="col-3 text-start">
                                <p class="fs-5 color-white fw-normal">hipertrofia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="bg-medium-gray w-100 br-10 p-2">
                        <div class="row mx-1">
                            <div class="col-8">
                                <p class="fs-5 color-white fw-normal">Emagrecimento</p>
                            </div>
                            <div class="col-3 text-start">
                                <p class="fs-5 color-white fw-normal">emagrecimento</p>
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
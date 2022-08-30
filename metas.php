<?php
include("./class/Componentes.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php Componentes::head("Metas"); ?>

<body class="bg-black">

    <?php Componentes::header("metas.php"); ?>

    <main class="mb-5">
        <div class="container mt-4 bg-gray p-4 br-10">
            <div class="row">
                <div class="col-12">
                    <div class="w-100 br-10">
                        <p class="fs-3 color-pink fw-semibold">Criar novas metas&nbsp;<i class="fa-solid fa-plus"></i>
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
                                    <input type="text" class="form-control fw-normal fs-5 bg-gray border-black color-white" placeholder="Nome">
                                    <label class="color-white fw-semibold">Nome</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control fw-normal fs-5 bg-gray border-black color-white" placeholder="Descrição">
                                    <label class="color-white fw-semibold">Descrição</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-floating">
                                    <input type="number" class="form-control fw-normal fs-5 bg-gray border-black color-white" placeholder="Repetições">
                                    <label class="color-white fw-semibold">Repetições</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-1 mb-2 mt-4">
                            <div class="col-3 ms-auto">
                                <button type="button" class="btn w-100 h-100 btn-pink fs-6">Incluir</button>
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
                        <p class="fs-3 color-pink fw-semibold">Metas ativas</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="bg-black w-100 br-10 p-2">
                        <div class="row mx-1">
                            <div class="col-8">
                                <p class="fs-5 color-white fw-semibold">Exercício</p>
                            </div>
                            <div class="col-3 text-start">
                                <p class="fs-5 color-white fw-semibold">Data de criação</p>
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
                            <div class="col-8">
                                <p class="fs-5 color-white fw-normal">Faça 500 repetições de supino reto (barra)</p>
                            </div>
                            <div class="col-3 text-start">
                                <p class="fs-5 color-white fw-normal">30/08/2022</p>
                            </div>
                            <div class="col-1 text-center align-self-end">
                                <i class="fs-5 color-pink fw-semibold fa-solid fa-trash-can pink-hover" style="cursor: pointer;"></i>
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
                                <p class="fs-5 color-white fw-normal">Faça 500 repetições de desenvolvimento lateral
                                    (halter)</p>
                            </div>
                            <div class="col-3 text-start">
                                <p class="fs-5 color-white fw-normal">30/08/2022</p>
                            </div>
                            <div class="col-1 text-center align-self-end">
                                <i class="fs-5 color-pink fw-semibold fa-solid fa-trash-can pink-hover" style="cursor: pointer;"></i>
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
                                <p class="fs-5 color-white fw-normal">Faça 500 repetições de biceps martelo (halter)</p>
                            </div>
                            <div class="col-3 text-start">
                                <p class="fs-5 color-white fw-normal">30/08/2022</p>
                            </div>
                            <div class="col-1 text-center align-self-end">
                                <i class="fs-5 color-pink fw-semibold fa-solid fa-trash-can pink-hover" style="cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
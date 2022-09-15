<?php
include("./class/Componentes.php");
include("../mysql/conexao.php");
session_start();

// Busca as metas ativas
$sql = "SELECT
            nome,
            descricao,
            pontos,
            quantidade,
            id_metas
        FROM 
            metas
        WHERE
            ativo = 'true'";
$result = $mysqli->query($sql);

// Monta as linhas das metas
$htmlLinhasMetas = '';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $htmlLinhasMetas .= '<div class="row mt-3" id="meta_' . $row['id_metas'] . '">
                                <div class="col-12">
                                    <div class="bg-medium-gray w-100 br-10 p-2">
                                        <div class="row mx-1">
                                            <div class="col-6">
                                                <p class="fs-6 color-white fw-normal">' . $row['descricao'] . '</p>
                                            </div>
                                            <div class="col-2 text-start">
                                                <p class="fs-6 color-white fw-normal">' . $row['pontos'] . '</p>
                                            </div>
                                            <div class="col-2 text-start">
                                                <p class="fs-6 color-white fw-normal">' . $row['quantidade'] . '</p>
                                            </div>
                                            <div class="col-2 text-center align-self-end">
                                                <i class="fs-6 color-pink fw-semibold fa-solid fa-trash-can pink-hover cursor-pointer" onclick="deletaMeta(' . $row['id_metas'] . ')"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>';
    }
}
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">

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
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control fw-normal fs-5 bg-medium-gray border-black color-white" placeholder="Descrição" id="descricao">
                                    <label class="color-white fw-semibold" id="labelDescricao">Descrição</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control fw-normal fs-5 bg-medium-gray border-black color-white" placeholder="Pontos" id="pontos">
                                    <label class="color-white fw-semibold" id="labelPontos">Pontos</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-floating">
                                    <input type="number" class="form-control fw-normal fs-5 bg-medium-gray border-black color-white" placeholder="Repetições" id="repeticoes">
                                    <label class="color-white fw-semibold" id="labelRepeticoes">Repetições</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-1 mb-2 mt-4">
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
                        <p class="fs-3 color-pink fw-semibold">Metas ativas</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="bg-black w-100 br-10 p-2">
                        <div class="row mx-1">
                            <div class="col-6">
                                <p class="fs-6 color-white fw-semibold">Nome</p>
                            </div>
                            <div class="col-2 text-start">
                                <p class="fs-6 color-white fw-semibold">Pontos</p>
                            </div>
                            <div class="col-2 text-start">
                                <p class="fs-6 color-white fw-semibold">Repetições</p>
                            </div>
                            <div class="col-2 text-center align-self-end">
                                <p class="fs-6 color-white fw-semibold">Deletar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $htmlLinhasMetas; ?>
        </div>
    </main>

    <script>
        document.getElementById("btn_incluir").addEventListener('click', () => {
            var formData = new FormData();
            formData.set('nome', document.querySelector("#nome").value);
            formData.set('descricao', document.querySelector("#descricao").value);
            formData.set('repeticoes', document.querySelector("#repeticoes").value);

            fetch('./ajax/incluiMeta.php', {
                method: 'POST',
                body: formData
            }).then(response => response.text()).then(function(text) {
                if (text == 1) {
                    limpaCampos(["#nome", "#descricao", "#repeticoes"]);
                    Swal.fire({
                        title: "Meta incluída com sucesso!",
                        icon: "success",
                        confirmButtonText: "Ok",
                        background: "#191919",
                        customClass: {
                            confirmButton: "btn-pink",
                            title: "color-white",
                        },
                    });
                } else {
                    limpaCampos(["#nome", "#descricao", "#repeticoes"]);
                    alertaPreenchimento([
                        ["#nome", "#labelNome"],
                        ["#descricao", "#labelDescricao"],
                        ["#repeticoes", "#labelRepeticoes"]
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
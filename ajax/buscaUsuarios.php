<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

include("../../mysql/conexao.php");

// Busca o nome e o cpf no banco de dados
if (isset($_POST["nome"]) && isset($_POST["cpf"])) {
    $sql = "SELECT
                nome,
                cpf
            FROM 
                usuarios
            WHERE
                email LIKE '%" . $_POST["nome"] . "%'
            AND
                cpf = '" . $_POST["cpf"] . "'";
} else if (isset($_POST["cpf"])) {
    $sql = "SELECT
                nome,
                cpf
            FROM 
                usuarios
            WHERE
                cpf = '" . $_POST["cpf"] . "'";
} else if (isset($_POST["nome"])) {
    $sql = "SELECT
                nome,
                cpf
            FROM 
                usuarios
            WHERE
                email LIKE '%" . $_POST["nome"] . "%'";
}

$htmlUsuario = "";

$result = $mysqli->query($sql);

// Atribui o id dos exercícios ao array $idExerciciosArray
$idExerciciosArray = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($idExerciciosArray, $row["id_exercicio"]);
        $htmlUsuario = '<div class="row mt-3">
                            <div class="col-12">
                                <div class="bg-medium-gray w-100 br-10 p-2">
                                    <div class="row mx-1">
                                        <div class="col-7">
                                            <p class="fs-5 color-white fw-normal">' . mysqli_fetch_assoc(mysqli_query($mysqli, $sql))["nome"] . '</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="fs-5 color-white fw-normal">' . mysqli_fetch_assoc(mysqli_query($mysqli, $sql))["cpf"] . '</p>
                                        </div>
                                        <div class="col-1 text-center align-self-end">
                                            <i class="fs-5 color-pink fw-semibold fa-solid fa-trash-can pink-hover cursor-pointer"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
    }
} else {
    $htmlUsuario = "Nenhum usuário encontrado";
}

// if (mysqli_fetch_assoc(mysqli_query($mysqli, $sql))["nome"] != null && mysqli_fetch_assoc(mysqli_query($mysqli, $sql))["cpf"] != null) {
//     $htmlUsuario = '<div class="row mt-3">
//                         <div class="col-12">
//                             <div class="bg-medium-gray w-100 br-10 p-2">
//                                 <div class="row mx-1">
//                                     <div class="col-7">
//                                         <p class="fs-5 color-white fw-normal">' . mysqli_fetch_assoc(mysqli_query($mysqli, $sql))["nome"] . '</p>
//                                     </div>
//                                     <div class="col-4">
//                                         <p class="fs-5 color-white fw-normal">' . mysqli_fetch_assoc(mysqli_query($mysqli, $sql))["cpf"] . '</p>
//                                     </div>
//                                     <div class="col-1 text-center align-self-end">
//                                         <i class="fs-5 color-pink fw-semibold fa-solid fa-trash-can pink-hover cursor-pointer"></i>
//                                     </div>
//                                 </div>
//                             </div>
//                         </div>
//                     </div>';
// }
echo $htmlUsuario;

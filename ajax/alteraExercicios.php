<?php

if (
    $_POST["nome"] != "" && $_POST["descricao"] != "" && $_POST["series"] != ""
    && $_POST["repeticoes"] != "" && $_POST["treino"] != ""
)
    echo 1;
else
    echo 0;

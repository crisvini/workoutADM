function logout() {
  Swal.fire({
    title: "Tem certeza que deseja sair?",
    icon: "question",
    showCancelButton: true,
    confirmButtonText: "Sim",
    cancelButtonText: "Não",
    background: "#191919",
    customClass: {
      confirmButton: "btn-gray",
      cancelButton: "btn-pink",
      title: "color-white",
    },
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = "./index.php";
    }
  });
}

function alertaPreenchimento(idCampos) {
  for (var i = 0; i < idCampos.length; i++) {
    if ($(idCampos[i][0]).val() == "") {
      document.querySelector(idCampos[i][0]).classList.add("alerta-input");
      document.querySelector(idCampos[i][1]).classList.add("alerta-label");
    } else {
      document.querySelector(idCampos[i][0]).classList.remove("alerta-input");
      document.querySelector(idCampos[i][1]).classList.remove("alerta-label");
    }
  }
}

function limpaCampos(idCampos) {
  for (var i = 0; i < idCampos.length; i++) {
    document.querySelector(idCampos[i]).value = "";
  }
}

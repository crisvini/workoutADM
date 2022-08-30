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

function alertaPreenchimento(idCampo, idLabel) {
  if ($(idCampo).val() == "") {
    $(idLabel).addClass("alerta-label");
    $(idCampo).addClass("alerta-input");
  } else {
    $(idLabel).removeClass("alerta-label");
    $(idCampo).removeClass("alerta-input");
  }
}

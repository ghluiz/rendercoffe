function abrirInput() {
  const input = document.getElementById('inputFoto');
  if (input) {
    input.click();
  }
}

function enviarFoto() {
  const form = document.getElementById('formFoto');
  if (form) {
    form.submit();
  }
}
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("contactSectionForm");
  const name = document.getElementById("nameContactSection");
  const email = document.getElementById("emailContactSection");
  const msg = document.getElementById("msgContactSection");
  const terms = document.getElementById("termsContactSection");
  const btn = document.getElementById("sendContactSection");

  function validate() {
    const isValid =
      name.value.trim() !== "" &&
      email.value.trim() !== "" &&
      msg.value.trim() !== "" &&
      terms.checked;

    btn.disabled = !isValid;
  }

  [name, email, msg, terms].forEach((input) => {
    input.addEventListener("input", validate);
  });

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    // TODO: Adicionar o envio do formulário
    form.reset();
    validar();
  });

  validate();
});

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("contactForm");
  const name = document.getElementById("nameContact");
  const email = document.getElementById("emailContact");
  const msg = document.getElementById("msgContact");
  const terms = document.getElementById("termsContact");
  const btn = document.getElementById("sendContact");

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

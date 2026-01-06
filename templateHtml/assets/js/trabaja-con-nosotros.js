(function () {
  console.log("[Page] trabaja-con-nosotros OK");

  const form = document.getElementById("jobsForm");
  const status = document.getElementById("jobsStatus");
  if (!form) return;

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    if (!form.checkValidity()) {
      e.stopPropagation();
      form.classList.add("was-validated");
      if (status) status.innerHTML = '<i class="bi bi-exclamation-circle"></i> Revisa los campos marcados.';
      return;
    }

    form.classList.add("was-validated");

    const fd = new FormData(form);
    const payload = Object.fromEntries(fd.entries());

    if (status) status.innerHTML = '<i class="bi bi-hourglass-split"></i> Enviando candidatura (demo)...';

    setTimeout(() => {
      if (status) status.innerHTML = '<i class="bi bi-check2-circle"></i> Recibido. Gracias, te contactaremos pronto.';
      form.reset();
      form.classList.remove("was-validated");
      console.log("Jobs form payload:", payload);
    }, 700);
  });
})();
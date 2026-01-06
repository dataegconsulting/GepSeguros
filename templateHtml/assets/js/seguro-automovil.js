(function () {
  // Scroll suave cuando pulsas botones con hash
  document.addEventListener("click", (e) => {
    const a = e.target.closest('a[href^="#"]');
    if (!a) return;
    const id = a.getAttribute("href");
    if (!id || id === "#") return;

    const target = document.querySelector(id);
    if (!target) return;

    e.preventDefault();
    target.scrollIntoView({ behavior: "smooth", block: "start" });
    history.replaceState(null, "", id);
  });

  // Form demo: validación + feedback
  const form = document.getElementById("autoQuoteForm");
  const status = document.getElementById("autoFormStatus");
  if (!form) return;

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    e.stopPropagation();

    if (!form.checkValidity()) {
      form.classList.add("was-validated");
      if (status) status.textContent = "Revisa los campos marcados.";
      return;
    }

    form.classList.add("was-validated");
    const fd = new FormData(form);
    const payload = Object.fromEntries(fd.entries());

    if (status) status.textContent = "Enviando solicitud...";

    setTimeout(() => {
      if (status) status.textContent = "Solicitud enviada. Te contactaremos pronto.";
      console.log("[Seguro Automóvil] Payload:", payload);
      form.reset();
      form.classList.remove("was-validated");
    }, 700);
  });
})();
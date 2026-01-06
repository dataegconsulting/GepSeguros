(function () {
  // ---------------------------
  // WhatsApp Button
  // ---------------------------
  document.addEventListener("click", (e) => {
    const btn = e.target.closest("[data-wa]");
    if (!btn) return;

    const wa = (btn.dataset.wa || "").trim();
    const company = btn.dataset.company || "GEPETROL SEGUROS";

    const msg = encodeURIComponent(
      `Hola ${company}, me gustaría recibir información / presupuesto.`
    );

    // WhatsApp universal link
    const url = `https://wa.me/${wa}?text=${msg}`;
    window.open(url, "_blank", "noopener");
  });

  // ---------------------------
  // Form demo: validación + feedback
  // ---------------------------
  const form = document.getElementById("contactForm");
  const status = document.getElementById("contactStatus");

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

    if (status) status.textContent = "Enviando mensaje...";

    // Demo: aquí conectamos backend más adelante
    setTimeout(() => {
      if (status) status.textContent = "Mensaje enviado correctamente. Te contactaremos pronto.";
      console.log("[Contacto] Payload:", payload);
      form.reset();
      form.classList.remove("was-validated");
    }, 700);
  });
})();
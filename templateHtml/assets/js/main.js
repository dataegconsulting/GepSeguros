(function () {
  const prefersReduced =
    window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  // Año dinámico
  const y = document.getElementById("yearNow");
  if (y) y.textContent = new Date().getFullYear();

  // ---------------------------
  // Reveal on Scroll (IO)
  // ---------------------------
  const revealEls = Array.from(document.querySelectorAll(".reveal"));
  if (!prefersReduced && "IntersectionObserver" in window) {
    const io = new IntersectionObserver(
      (entries) => {
        for (const e of entries) {
          if (e.isIntersecting) {
            e.target.classList.add("is-visible");
            io.unobserve(e.target);
          }
        }
      },
      { root: null, threshold: 0.12 }
    );
    revealEls.forEach((el) => io.observe(el));
  } else {
    revealEls.forEach((el) => el.classList.add("is-visible"));
  }

  // ---------------------------
  // Parallax suave (requestAnimationFrame)
  // ---------------------------
  const parallaxEls = Array.from(document.querySelectorAll(".parallax"));
  let latestY = 0;
  let ticking = false;

  function applyParallax() {
    ticking = false;
    for (const el of parallaxEls) {
      const speed = parseFloat(el.dataset.parallax || "0.12");
      // translate Y leve
      const offset = -(latestY * speed);
      el.style.transform = `translate3d(0, ${offset}px, 0) scale(1.03)`;
    }
  }

  function onScroll() {
    latestY = window.scrollY || 0;
    if (!ticking) {
      ticking = true;
      window.requestAnimationFrame(applyParallax);
    }
  }

  if (!prefersReduced && parallaxEls.length) {
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  }

  // ---------------------------
  // Hover Tilt 3D (sin librerías)
  // ---------------------------
  const tiltEls = Array.from(document.querySelectorAll("[data-tilt]"));

  function tiltMove(e) {
    const el = e.currentTarget;
    const rect = el.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const px = (x / rect.width) * 2 - 1; // -1..1
    const py = (y / rect.height) * 2 - 1; // -1..1

    const max = 10; // grados
    const rotY = px * max;
    const rotX = -py * max;

    el.style.transform = `perspective(900px) rotateX(${rotX}deg) rotateY(${rotY}deg) translateY(-2px)`;
  }

  function tiltLeave(e) {
    const el = e.currentTarget;
    el.style.transform =
      "perspective(900px) rotateX(0deg) rotateY(0deg) translateY(0)";
  }

  if (!prefersReduced && tiltEls.length) {
    tiltEls.forEach((el) => {
      el.addEventListener("mousemove", tiltMove);
      el.addEventListener("mouseleave", tiltLeave);
    });
  }

  // ---------------------------
  // Formulario: validación + envío demo
  // ---------------------------
  const form = document.getElementById("quoteForm");
  const status = document.getElementById("formStatus");

  if (form) {
    form.addEventListener("submit", (e) => {
      e.preventDefault();

      if (!form.checkValidity()) {
        e.stopPropagation();
        form.classList.add("was-validated");
        if (status) status.textContent = "Revisa los campos marcados.";
        return;
      }

      form.classList.add("was-validated");

      const fd = new FormData(form);
      const payload = Object.fromEntries(fd.entries());

      if (status) status.textContent = "Enviando solicitud...";

      // Aquí conectas tu endpoint real (más adelante)
      // fetch("/api/quote-request", { method:"POST", headers:{ "Content-Type":"application/json" }, body: JSON.stringify(payload) })

      setTimeout(() => {
        if (status)
          status.textContent =
            "Solicitud enviada correctamente. Te contactaremos pronto.";
        form.reset();
        form.classList.remove("was-validated");
      }, 700);

      console.log("Quote Request Payload:", payload);
    });
  }

  // ---------------------------
  // Parar video al cerrar modal
  // ---------------------------
  const videoModal = document.getElementById("videoModal");
  const videoFrame = document.getElementById("videoFrame");
  if (videoModal && videoFrame) {
    const src = videoFrame.getAttribute("src");
    videoModal.addEventListener("hidden.bs.modal", () => {
      videoFrame.setAttribute("src", src);
    });
  }

  // ============================
  // Back to Top
  // ============================
  const backToTop = document.getElementById("backToTop");

  if (backToTop) {
    window.addEventListener(
      "scroll",
      () => {
        if (window.scrollY > 420) {
          backToTop.classList.add("show");
        } else {
          backToTop.classList.remove("show");
        }
      },
      { passive: true }
    );

    backToTop.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }
})();


// ============================
// Navbar FIX + Shrink (robusto)
// ============================
(function () {
  const nav = document.getElementById("mainNavbar");
  if (!nav) {
    console.warn("[NavbarFix] No se encontró #mainNavbar");
    return;
  }

  let last = -1;
  let ticking = false;

  function apply() {
    ticking = false;
    const y = window.scrollY || document.documentElement.scrollTop || 0;
    if (y === last) return;
    last = y;

    if (y > 18) nav.classList.add("is-shrink");
    else nav.classList.remove("is-shrink");

    // guarda altura real para mega-menu/anchors
    const h = Math.round(nav.getBoundingClientRect().height || 84);
    document.documentElement.style.setProperty("--nav-h", `${h}px`);
  }

  function onScroll() {
    if (!ticking) {
      ticking = true;
      requestAnimationFrame(apply);
    }
  }

  // init
  apply();

  // listeners
  window.addEventListener("scroll", onScroll, { passive: true });
  window.addEventListener("resize", apply);

  console.log("[NavbarFix] OK (scroll listener activo)");
})();

// ============================
// HERO BG preload + lazy (local)
// ============================
(function () {
  const bgEls = Array.from(document.querySelectorAll(".hero-bg"));
  if (!bgEls.length) return;

  function getBgUrl(el) {
    const bg = el.style.backgroundImage || "";
    const match = bg.match(/url\(["']?(.*?)["']?\)/i);
    return match ? match[1] : "";
  }

  function markLoaded(el) {
    el.classList.add("is-loaded");
  }

  function preloadBg(el) {
    const url = getBgUrl(el);
    if (!url) return;
    
    const img = new Image();
    img.decoding = "async";
    img.onload = () => markLoaded(el);
    img.onerror = () => markLoaded(el);
    img.src = url;
    if (img.complete) markLoaded(el);
  }

  // 1) Precarga primer slide (LCP)
  preloadBg(bgEls[0]);

  // 2) Lazy el resto
  const rest = bgEls.slice(1);
  if ("IntersectionObserver" in window && rest.length) {
    const io = new IntersectionObserver(
      (entries) => {
        for (const e of entries) {
          if (e.isIntersecting) {
            preloadBg(e.target);
            io.unobserve(e.target);
          }
        }
      },
      { threshold: 0.12 }
    );
    rest.forEach((el) => io.observe(el));
  } else {
    setTimeout(() => rest.forEach(preloadBg), 800);
  }
})();
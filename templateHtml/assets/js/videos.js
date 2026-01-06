(function () {
  // ----------------------------
  // Filtros + búsqueda
  // ----------------------------
  const grid = document.getElementById("videosGrid");
  if (!grid) return;

  const items = Array.from(grid.querySelectorAll(".video-item"));
  const search = document.getElementById("videoSearch");
  const filterBtns = Array.from(document.querySelectorAll("[data-filter]"));

  function applyFilter() {
    const activeBtn = filterBtns.find(b => b.classList.contains("is-active"));
    const cat = activeBtn ? activeBtn.dataset.filter : "all";
    const q = (search?.value || "").trim().toLowerCase();

    items.forEach((el) => {
      const elCat = (el.dataset.cat || "").toLowerCase();
      const title = (el.dataset.title || "").toLowerCase();

      const okCat = (cat === "all") ? true : elCat === cat;
      const okQ = !q ? true : title.includes(q);

      el.style.display = (okCat && okQ) ? "" : "none";
    });
  }

  filterBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      filterBtns.forEach(b => b.classList.remove("is-active"));
      btn.classList.add("is-active");
      applyFilter();
    });
  });

  if (search) {
    search.addEventListener("input", applyFilter);
  }

  // ----------------------------
  // Modal video (YouTube / MP4)
  // ----------------------------
  const videoModal = document.getElementById("videoModal");
  const ytWrap = document.getElementById("ytWrap");
  const ytFrame = document.getElementById("ytFrame");

  const mp4Wrap = document.getElementById("mp4Wrap");
  const mp4Video = document.getElementById("mp4Video");

  document.addEventListener("click", (e) => {
    const btn = e.target.closest(".video-play");
    if (!btn) return;

    const src = btn.dataset.video || "";
    const type = btn.dataset.type || "youtube";

    // Reset
    ytWrap.classList.add("d-none");
    mp4Wrap.classList.add("d-none");
    ytFrame.src = "";
    mp4Video.removeAttribute("src");

    if (type === "mp4" || src.endsWith(".mp4")) {
      mp4Wrap.classList.remove("d-none");
      mp4Video.src = src;
      mp4Video.play?.();
      return;
    }

    // YouTube iframe
    ytWrap.classList.remove("d-none");
    ytFrame.src = src.includes("?") ? (src + "&autoplay=1") : (src + "?autoplay=1");
  });

  if (videoModal) {
    videoModal.addEventListener("hidden.bs.modal", () => {
      ytFrame.src = "";
      mp4Video.pause?.();
      mp4Video.removeAttribute("src");
      mp4Video.load?.();
    });
  }

  applyFilter();
})();
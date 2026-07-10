// Widget tab berita: Terbaru / Populer / Trending
document.addEventListener("DOMContentLoaded", function () {
  const tabButtons = document.querySelectorAll(".berita-tabs .tab-btn");

  tabButtons.forEach(function (btn) {
    btn.addEventListener("click", function () {
      const target = btn.dataset.tab;

      document
        .querySelectorAll(".berita-tabs .tab-btn")
        .forEach((b) => b.classList.remove("active"));
      document
        .querySelectorAll(".berita-tabs .tab-content")
        .forEach((c) => c.classList.remove("active"));

      btn.classList.add("active");
      document.getElementById(target).classList.add("active");
    });
  });
});
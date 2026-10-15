document.addEventListener("DOMContentLoaded", () => {
    
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("overlay");
    const openBtn = document.getElementById("menuOpen");
    const closeBtn = document.getElementById("menuClose");

    function toggleMenu(open) {
        sidebar.classList.toggle("open", open);
        overlay.classList.toggle("show", open);
        sidebar.setAttribute("aria-hidden", String(!open));
        openBtn.setAttribute("aria-expanded", String(open));
    }
    openBtn.addEventListener("click", () => toggleMenu(true));
    closeBtn.addEventListener("click", () => toggleMenu(false));
    overlay.addEventListener("click", () => toggleMenu(false));
    document.addEventListener("keydown", e => { if (e.key === "Escape") toggleMenu(false); });
});
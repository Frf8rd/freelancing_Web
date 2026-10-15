
document.addEventListener("DOMContentLoaded", () => {
    
    document.querySelectorAll("form[data-demo]").forEach(f =>
        f.addEventListener("submit", e => e.preventDefault()));
});
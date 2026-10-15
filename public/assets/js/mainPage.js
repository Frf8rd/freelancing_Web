
document.addEventListener("DOMContentLoaded", () => {
    
    const carousel = document.getElementById("carousel");
    if (carousel) {
        const slides = carousel.querySelectorAll(".slide");
        const dots = carousel.querySelectorAll(".dot");
        let current = 0;

        function show(i) {
            current = (i + slides.length) % slides.length;
            slides.forEach((s, k) => s.classList.toggle("active", k === current));
            dots.forEach((d, k) => d.classList.toggle("active", k === current));
        }
        carousel.querySelector(".prev").addEventListener("click", () => show(current - 1));
        carousel.querySelector(".next").addEventListener("click", () => show(current + 1));
        dots.forEach(d => d.addEventListener("click", () => show(Number(d.dataset.index))));

        // swipe pe telefon
        let startX = 0;
        carousel.addEventListener("touchstart", e => { startX = e.touches[0].clientX; }, { passive: true });
        carousel.addEventListener("touchend", e => {
            const dx = e.changedTouches[0].clientX - startX;
            if (Math.abs(dx) > 40) show(current + (dx < 0 ? 1 : -1));
        });
    }
});
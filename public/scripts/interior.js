document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".interior-card");

    cards.forEach((card, index) => {
        setTimeout(() => {
            card.classList.add("animate__animated", "animate__fadeInUp");
        }, index * 200); // Задержка для каждой карточки
    });
});

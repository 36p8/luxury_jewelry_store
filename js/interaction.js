function addToMix(name) {
    const list = document.getElementById("mix-list");
    if (!list) return;

    const li = document.createElement("li");
    li.textContent = name;
    list.appendChild(li);
}


document.addEventListener("DOMContentLoaded", () => {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const cards = document.querySelectorAll(".product-card");

    filterButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            const category = btn.getAttribute("data-category");

            filterButtons.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");

            cards.forEach(card => {
                const cardCat = card.getAttribute("data-category");
                if (category === "all" || category === cardCat) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        });
    });
});

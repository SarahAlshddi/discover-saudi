// Apply saved mode when the page opens
window.onload = function () {
    if (localStorage.getItem("mode") === "dark") {
        document.body.classList.add("dark");
    }
};

// Dark / Light mode
function toggleMode() {
    document.body.classList.toggle("dark");

    if (document.body.classList.contains("dark")) {
        localStorage.setItem("mode", "dark");
    } else {
        localStorage.setItem("mode", "light");
    }
}

// Filter regions by category
function filterRegions(category) {
    let cards = document.querySelectorAll(".region-card");

    cards.forEach(card => {
        let cardCategory = card.getAttribute("data-category");

        if (category === "all" || cardCategory === category) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
}

const ratingStars = document.querySelectorAll(".Rating .bx-star");
const ratingValue = document.getElementById("ratingValue");
const ratingForm = document.getElementById("ratingForm");
const thankYouMessage = document.getElementById("thankYouMessage");

ratingStars.forEach((star, index) => {
    star.addEventListener("mouseover", () => {
        resetRating();
        for (let i = 0; i <= index; i++) {
            ratingStars[i].classList.add("active");
        }
    });

    star.addEventListener("click", () => {
        ratingValue.value = index + 1;
    });

    star.addEventListener("mouseout", () => {
        resetRating();
        for (let i = 0; i < ratingValue.value; i++) {
            ratingStars[i].classList.add("active");
        }
    });
});

function resetRating() {
    ratingStars.forEach((star) => {
        star.classList.remove("active");
    });
}

ratingForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the form from submitting normally

    // You can handle form submission here (e.g., sending data to a server)
    // For demonstration purposes, we'll just show the thank you message
    thankYouMessage.classList.remove("hidden");
    ratingForm.reset(); // Reset the form
});

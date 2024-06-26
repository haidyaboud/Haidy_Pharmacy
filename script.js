document.addEventListener('DOMContentLoaded', function () {
    function handleAddToCartClick() {
        var productName = this.dataset.productName; 
        var message = productName + ' added to cart!';
        alert(message);
    }

    var addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(function (button) {
        button.addEventListener('click', handleAddToCartClick);
    });
});

let currentIndex = 0;
const images = [
    "image\\WhatsApp Image 2023-12-09 at 7.49.54 PM.jpeg.png",
    "image\\WhatsApp Image 2023-12-09 at 7.49.55 PM (1).jpeg.png",
    "image\\WhatsApp Image 2023-12-09 at 7.49.55 PM.jpeg.png",
    "image\\WhatsApp Image 2023-12-09 at 7.49.55 PM (2).jpeg.png",
    
];

function showSlide() {
    document.getElementById("sliderImage").src = images[currentIndex];
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % images.length;
    showSlide();
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showSlide();
}

function autoSlideRight() {
    nextSlide();
}

function autoSlideLeft() {
    prevSlide();
}
const slideRightInterval = setInterval(autoSlideRight, 3000);

const slideLeftInterval = setInterval(autoSlideLeft, 5000); 
document.getElementById("sliderImage").addEventListener("mouseover", function () {
    clearInterval(slideRightInterval);
    clearInterval(slideLeftInterval);
});

document.getElementById("sliderImage").addEventListener("mouseout", function () {
    slideRightInterval = setInterval(autoSlideRight, 3000);
    slideLeftInterval = setInterval(autoSlideLeft, 5000);
});

showSlide();









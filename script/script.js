document.addEventListener('DOMContentLoaded', (event) => {
    const buyNowButtons = document.querySelectorAll('.btn-outline-info');
    buyNowButtons.forEach(button => {
        button.addEventListener('click', function() {
            alert('Thank you for your purchase!');
        });
    });
});


function addToCart() {
  
    alert('Product added to cart!');
}
// Function to show/hide the cart
function toggleCart() {
    var cart = document.querySelector('.cart');
    cart.classList.toggle('active');
}

// Attach event listener to the cart icon and close icon
document.getElementById('cart-icon').addEventListener('click', toggleCart);
document.getElementById('cart-close').addEventListener('click', toggleCart);

// Function to add a product to the cart
function addToCart(clickedButton) {
    // Get the product details from the clicked button's parent element
    var productElement = clickedButton.parentElement;
    var productName = productElement.querySelector('h5').innerText;
    var productPrice = productElement.querySelector('h4').innerText;
    var productImageSrc = productElement.parentElement.querySelector('img').src;

    // Create a new cart item element
    var cartItem = document.createElement('div');
    cartItem.classList.add('cart-box');
    cartItem.innerHTML = `
        <img src="${productImageSrc}" alt="" class="cart-img">
        <div class="detailed-box">
            <div class="cart-product-title">${productName}</div>
            <div class="cart-price">${productPrice}</div>
        </div>
    `;

    // Append the new cart item to the cart content
    var cartContent = document.querySelector('.cart-content');
    cartContent.appendChild(cartItem);

    // Update the total price
    updateTotalPrice();
    alert('Added To Cart Successfully' );
}

// Function to update the total price in the cart
function updateTotalPrice() {
    var total = 0;
    var prices = document.querySelectorAll('.cart-price');
    prices.forEach(function(price) {
        total += parseFloat(price.innerText.replace('$', ''));
    });
    document.querySelector('.total-price').innerText = '$' + total.toFixed(2);
}

// Attach the addToCart function to all 'Add to Cart' buttons
document.querySelectorAll('.pro .des button').forEach(function(button) {
    button.addEventListener('click', function() {
        addToCart(this);
    });
});

function buyNow() {
    var total = document.querySelector('.total-price').innerText; // Get the total price
    alert('Thank you for your purchase! Your total is ' + total); // Show an alert with the total price
}


document.querySelector('.btn-buy').addEventListener('click', buyNow);

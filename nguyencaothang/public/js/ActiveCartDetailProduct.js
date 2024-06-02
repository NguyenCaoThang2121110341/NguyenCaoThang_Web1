document.addEventListener('DOMContentLoaded', function() {
    var plusButton = document.querySelector('.cart-plus');
    var minusButton = document.querySelector('.cart-minus');
    var quantityInput = document.querySelector('.cart-plus-minus-box');

    plusButton.addEventListener('click', function() {
        quantityInput.value = parseInt(quantityInput.value) + 1;
    });

    minusButton.addEventListener('click', function() {
        if (parseInt(quantityInput.value) > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
        }
    });
});

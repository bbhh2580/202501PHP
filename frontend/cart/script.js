
let productList = document.getElementById("products-list"); // Get the product list element
let cartItem = document.getElementById('cart-items') // Get the cart item element
let totalPrice = document.getElementById('total-price') // Get the total price element

let cart = []; // Initialize an empty cart array

productList.addEventListener("click", (event) => {
    if (event.target.classList.contains("add-to-cart")) {
        let product = event.target.closest(".product");
        let productId = product.dataset.id;
        let productName = product.dataset.name;
        let productPrice = product.dataset.price;

        let existingProduct = cart.find((item) => item.id === productId);
        if (existingProduct) {
            existingProduct.quantity++;
        } else {
            cart.push({ id: productId, name: productName, price: productPrice, quantity: 1 });
        }

        renderCart();
    }
})

function renderCart() {
    cartItem.innerHTML = '';
    let total = 0;

    cart.forEach((item) => {
        let li = document.createElement('li');
        li.innerHTML = `${item.name} - $${item.price} x ${item.quantity} = $${item.price * item.quantity}`;
        let removeButton = document.createElement('button');
        removeButton.textContent = 'Remove';
        removeButton.classList.add('remove');
        removeButton.dataset.id = item.id;
        li.appendChild(removeButton);
        cartItem.appendChild(li);
        total += item.price * item.quantity;
    });
    totalPrice.textContent = `Total: $${total.toFixed(2)}`;
}

cartItem.addEventListener("click", (event) => {
    if (event.target.classList.contains("remove")) {
        let productId = event.target.dataset.id;
        cart = cart.filter((item) => item.id !== productId);
        renderCart();
    }
});

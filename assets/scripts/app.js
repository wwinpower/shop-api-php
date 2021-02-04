let products = document.querySelectorAll('.products__item'),
    modalToggle = false;


function toggle(selector) {
    let elm = document.querySelector(selector);
        elm.style.display = !modalToggle ? 'flex' : 'none';
        modalToggle = !modalToggle;
}


for (let product of products) {
    let btn = product.querySelector('.btn');

    btn.addEventListener('click', function(event) {
        toggle('.modal')
        let text = event.target.parentElement.querySelector('p').innerText;
        document.querySelector('[name="productTitle"]').value = text;
    });
}

document.querySelector('.modal-close').addEventListener('click', () => toggle('.modal'));

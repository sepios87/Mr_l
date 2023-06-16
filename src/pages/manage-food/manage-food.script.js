document.addEventListener('DOMContentLoaded', function () {
    const foodList = document.getElementById('manage-food-list');
    const foodTemplate = document.getElementById('manage-food-template');
    const addBtn = document.getElementById('manage-food-btn-add');

    addBtn.addEventListener('click', function () {
        const li = document.createElement('li');
        li.classList.add('manage-food-list__item');
        li.appendChild(foodTemplate.content.cloneNode(true));
        foodList.appendChild(li);
    });
});

function editFood(elem) {
    const slip = elem.id.split('-');
    const id = slip[slip.length - 1];

    const foodTemplate = document.getElementById('manage-food-template');
    const nameInput = foodTemplate.content.querySelector('#name');
    const priceInput = foodTemplate.content.querySelector('#price');
    const ingredientsInput = foodTemplate.content.querySelector('#ingredients');

    const item = document.getElementById(`manage-food-item-${id}`);
    nameInput.value = item.querySelector('#manage-food-item-name').innerHTML;
    priceInput.value = item.querySelector('#manage-food-item-price').innerHTML;
    ingredientsInput.value = item.querySelector(
        '#manage-food-item-ingredients'
    ).innerHTML;

    const inputId = document.createElement('input');
    inputId.id = 'id';
    inputId.setAttribute('type', 'hidden');
    inputId.setAttribute('name', 'id');
    inputId.setAttribute('value', id);
    const form = foodTemplate.content.querySelector('.manage-food-list__edit-form');
    form.appendChild(inputId);

    item.innerHTML = '';
    item.appendChild(foodTemplate.content.cloneNode(true));
}

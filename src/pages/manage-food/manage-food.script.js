document.addEventListener('DOMContentLoaded', function () {
    const foodList = document.getElementById('manage-food-list');
    const foodTemplate = document.getElementById('manage-food-template');
    const addBtn = document.getElementById('manage-food-btn-add');

    // Add food action
    addBtn.addEventListener('click', function () {
        const li = document.createElement('li');
        li.classList.add('manage-food-list__item');
        li.appendChild(foodTemplate.content.cloneNode(true));
        foodList.appendChild(li);
    });
});

// Edit food action
function editFood(elem) {
    const slip = elem.id.split('-');
    const id = slip[slip.length - 1];

    const foodTemplate = document.getElementById('manage-food-template');
    const nameInput = foodTemplate.content.querySelector('#name');
    const priceInput = foodTemplate.content.querySelector('#price');
    const ingredientsInput = foodTemplate.content.querySelector('#ingredients');
    const checkboxVegetarian = foodTemplate.content.querySelector('#vegetarian');

    const item = document.getElementById(`manage-food-item-${id}`);
    nameInput.value = item.querySelector('#manage-food-item-name').innerHTML;
    const price = item.querySelector('#manage-food-item-price').innerHTML.replace('€', '');
    priceInput.value = price;
    ingredientsInput.value = item.querySelector(
        '#manage-food-item-ingredients'
    ).innerHTML;
    checkboxVegetarian.checked = item.classList.contains('manage-food-list__item--vegetarian');
    item.classList.remove('manage-food-list__item--vegetarian');

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
